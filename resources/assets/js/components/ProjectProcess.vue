<template>
    <div class="container">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>公司历程</h5>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>阶段</th>
                            <th>融资金额</th>
                            <th>投资方</th>
                            <th>融资时间</th>
                            <th>Editor</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody v-for="process in processes">

                        <tr>
                            <td>
                                <small><input class="process-show" type="text" v-model="process.state"></small>
                            </td>
                            <td>
                                <small><input class="process-show" type="text" v-model="process.money"></small>
                            </td>
                            <td>
                                <small><input class="process-show" type="text" v-model="process.investor"></small>
                            </td>
                            <td>
                                <small><input class="process-show" type="text" v-model="process.investe_time"></small>
                            </td>
                            <td><a @click="edit_process(process)" href="#"><i class="fa fa-check text-navy"></i></a></td>
                            <td><a @click="delete_process(process)" href="#"><i class="fa fa-trash text-navy"></i></a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>

                <div class="addprocess">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>阶段</th>
                            <th>融资金额</th>
                            <th>投资方</th>
                            <th>融资时间</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <small><input type="text" v-model="newprocess.state"></small>
                            </td>
                            <td>
                                <small><input type="text" v-model="newprocess.money"></small>
                            </td>
                            <td>
                                <small><input type="text" v-model="newprocess.investor"></small>
                            </td>
                            <td>
                                <small><input type="text" v-model="newprocess.investe_time"></small>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-primary btn-block m" @click="add_process"><i
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
        props: ['project_id'],
        data(){
            return {
                processes: [],
                newprocess: {
                    state: '',
                    money: '',
                    investor: '',
                    investe_time: '',
                    project_id: ''
                }
            };
        },
        mounted() {
            this.newprocess.project_id = this.project_id;
            let url = '/admin/project_process/' + this.project_id;
            this.$http.get(url).then(function (response) {
                // 響應成功回調
                this.processes = (response.data);
            }, function (response) {
                console.log(response);
                // 響應錯誤回調
            });

        },
        methods: {
            add_process(){
                this.$http.post('/admin/add_project_process', this.newprocess).then(function (response) {
                    // 響應成功回調

                    this.processes.push(response.data);
                }, function (response) {
                    console.log(response);
                    // 響應錯誤回調
                });
                this.newprocess.state = '';
                this.newprocess.money = '';
                this.newprocess.investor = '';
                this.newprocess.investe_time = '';

            },
            delete_process(process){

                if (confirm("是否确认删除")) {
                    this.$http.post('/admin/delete_project_process', process).then(function (response) {
                        // 響應成功回調
                        let index = this.processes.indexOf(process)
                        if (index !== -1) {
                            this.processes.splice(index, 1)
                        }



                    }, function (response) {
                        console.log(response);
                        // 響應錯誤回調
                    });
                }


            },
            edit_process(process){

                if (confirm("是否确认修改")) {
                    this.$http.post('/admin/edit_project_process', process).then(function (response) {
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
