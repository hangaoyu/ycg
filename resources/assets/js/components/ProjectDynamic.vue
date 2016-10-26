<template>
    <div class="container">
        <div class="ibox float-e-margins">

            <div class="ibox-title">
                <h5>公司动态</h5>
            </div>
            <div class="ibox-content">
                <div>
                    <div class="feed-activity-list" v-for="dynamic in dynamics">

                        <div class="feed-element animated fadeIn">
                            <div class="media-body ">
                                <strong>{{dynamic.dynamic_desrc}}</strong>. <br>
                                <small>{{dynamic.dynamic_type}}</small>
                                <div class="row edit-input-group">
                                    <input type="text" class="col-md-2 editor-input" v-model="dynamic.dynamic_type">
                                    <input type="text" class="col-md-8 editor-input" v-model="dynamic.dynamic_desrc">
                                </div>

                                <div class="edit-action">
                                    <button class="btn btn-primary m" @click="edit_dynamic(dynamic)">edit</button>
                                    <button class="btn btn-danger m" @click="delete_dynamic(dynamic)">delete</button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="adddynamic">
                        <!--<div class="alert alert-warning">-->
                            <!--<a href="#" class="close" data-dismiss="alert">-->
                                <!--&times;-->
                            <!--</a>-->
                            <!--<strong>警告！</strong>您的网络连接有问题。-->
                        <!--</div>-->
                        <div class="row">

                            <label class="col-md-2">tag:</label>

                            <input class="col-md-2 col-md-offset-1" v-model="newdynamic.dynamic_type" type="text">
                        </div>
                        <div class="row">
                            <label class="col-md-2">动态详情:</label>

                            <input class="col-md-8 col-md-offset-1" type="text" v-model="newdynamic.dynamic_desrc">
                        </div>
                        <button class="btn btn-primary btn-block m" @click="add_dynamic"><i
                                class="fa fa-arrow-down"></i> Add More
                        </button>
                    </div>


                </div>

            </div>
        </div>
    </div>
</template>
<style scoped>
    .container {
        width: 100%;
    }

    .adddynamic {
        padding: 10px;
    }

    .row {
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .edit-action {
        float: right;
    }

    .editor-input {
        margin: 0 10px;
    }

    .edit-input-group {
        margin-left: 0px;
    }

    .row label {
        text-align: center;
    }
</style>
<script>
    export default {
        props: ['project_id'],
        data(){
            return {
                dynamics: [],
                newdynamic: {
                    dynamic_type: '',
                    dynamic_desrc: '',
                    project_id: ''
                }
            };
        },
        mounted() {
            this.newdynamic.project_id = this.project_id;
            let url = '/admin/project_dynamic/' + this.project_id;
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
                this.$http.post('/admin/add_project_dynamic', this.newdynamic).then(function (response) {
                    // 響應成功回調
                    console.log(response);
                    this.dynamics.push(response.data);
                }, function (response) {
                    console.log(response);
                    // 響應錯誤回調
                });
                this.newholder.holder = '';


            },
            delete_dynamic(dynamic){

                if (confirm("是否确认删除")) {
                    this.$http.post('/admin/delete_project_dynamic', dynamic).then(function (response) {
                        // 響應成功回調
                        console.log(dynamic);
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
                    this.$http.post('/admin/edit_project_dynamic', dynamic).then(function (response) {
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
