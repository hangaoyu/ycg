<template>
    <div class="container">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>融资信息</h5>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>时间</th>
                            <th>融资方</th>
                            <th>内容</th>

                        </tr>
                        </thead>
                        <tbody v-for="dynamic in dynamics">
                        <tr>
                            <td>
                                <small><input class="process-show" type="text" v-model="dynamic.time"></small>
                            </td>
                            <td>
                                <small><input class="process-show" type="text" v-model="dynamic.subtitle"></small>
                            </td>
                            <td>
                                <small><input class="process-show" type="text" v-model="dynamic.title"></small>
                            </td>

                            <td><a @click="edit_dynamic(dynamic)" href="#"><i class="fa fa-check text-navy"></i></a></td>
                            <td><a @click="delete_dynamic(dynamic)" href="#"><i class="fa fa-trash text-navy"></i></a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>

                <div class="addprocess">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>时间</th>
                            <th>融资方</th>
                            <th>内容</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <small><input type="text" v-model="newdynamic.time"></small>
                            </td>
                            <td>
                                <small><input type="text" v-model="newdynamic.subtitle"></small>
                            </td>
                            <td>
                                <small><input type="text" v-model="newdynamic.title"></small>
                            </td>

                        </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-primary btn-block m" @click="add_dynamic"><i
                            class="fa fa-arrow-down"></i> Add More
                    </button>
                </div>
            </div>
        </div>
    </div>

</template>
<style scoped>
    .container {
        width: 100%;
    }

    .row {
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .process-show {
        border: 0px;
        background-color: transparent;
    }

    .row label {
        text-align: center;
    }

    .fa-check {

    }

    .fa-trash {

    }
</style>
<script>
    export default {

        data(){
            return {
                dynamics: [],
                newdynamic: {
                    time: '',
                    title: '',
                    subtitle: ''
                }
            };
        },
        mounted() {

            let url = '/admin/dynamic_list';
            this.$http.get(url).then(function (response) {
                // 響應成功回調
                this.dynamics = (response.data);
            }, function (response) {
                console.log(response);
                // 響應錯誤回調
            });

        },
        methods: {
            add_dynamic(){
                this.$http.post('/admin/add_dynamic', this.newdynamic).then(function (response) {
                    // 響應成功回調
                    console.log(response.data);
                    this.dynamics.push(response.data);
                }, function (response) {
                    console.log(response);
                    // 響應錯誤回調
                });
                this.newdynamic.time = '';
                this.newdynamic.subtitle = '';
                this.newdynamic.title = '';
            },
            delete_dynamic(dynamic){
                if (confirm("是否确认删除")) {
                    this.$http.post('/admin/delete_dynamic', dynamic).then(function (response) {
                        // 響應成功回調
                        let index = this.dynamics.indexOf(dynamic)
                        if (index !== -1) {
                            this.dynamics.splice(index, 1)
                        }
                    }, function (response) {
                        console.log(response);
                        // 響應錯誤回調
                    });
                }
            },
            edit_dynamic(dynamic){
                if (confirm("是否确认修改")) {
                    this.$http.post('/admin/edit_dynamic', dynamic).then(function (response) {
                        // 響應成功回調
                        alert('修改成功')
                    }, function (response) {
                        console.log(response);
                        // 響應錯誤回調
                    });
                }
            }
        }
    }
</script>
