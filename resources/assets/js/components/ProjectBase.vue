<template>
    <div class="container">

        <h4><strong>注册号:</strong>{{base.register_id}}</h4>
        <h4><strong>经营状态:</strong>{{base.state}}</h4>
        <h4><strong>法定代表:</strong>{{base.person}}</h4>
        <h4><strong>公司类型:</strong>{{base.type}}</h4>
        <h4><strong>成立日期:</strong>{{base.create_at}}</h4>
        <h4><strong>注册资本:</strong>{{base.capital}}</h4>
        <p><i class="fa fa-map-marker"></i>{{base.address}}</p>
        <hr>
        <h4>项目简介</h4>
        <p>{{base.desrc}}</p>
        <hr>
        <h4>项目描述</h4>
        <p>{{base.body}}</p>
        <div class="user-button">
            <div class="row">
                <div class="col-md-4">
                    <button data-toggle="modal" data-target="#project-base-modal" type="button"
                            class="btn btn-primary btn-sm btn-block"><i
                            class="fa fa-arrow-down"></i> editor
                    </button>
                </div>

            </div>
        </div>
        <div class="modal fade" id="project-base-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">公司基本信息</h4>
                    </div>
                    <div class="row">
                        <label class="col-md-2">项目名称:</label>
                        <input class="col-md-8 col-md-offset-1" type="text" v-model="base.name">
                    </div>
                    <div class="row">
                        <label class="col-md-2">项目简介:</label>

                        <textarea cols="30" rows="4" class="col-md-8 col-md-offset-1" type="text" v-model="base.desrc">
                            </textarea>
                    </div>
                    <div class="row">
                        <label class="col-md-2">项目描述:</label>
                         <textarea cols="30" rows="6" class="col-md-8 col-md-offset-1" type="text" v-model="base.body">
                            </textarea>

                    </div>
                    <div class="row">
                        <label class="col-md-2">注册号:</label>
                        <input class="col-md-8 col-md-offset-1" type="text" v-model="base.register_id">
                    </div>
                    <div class="row">
                        <label class="col-md-2">经营状态:</label>
                        <input class="col-md-8 col-md-offset-1" type="text" v-model="base.state">
                    </div>
                    <div class="row">
                        <label class="col-md-2">法定代表:</label>
                        <input class="col-md-8 col-md-offset-1" type="text" v-model="base.person">
                    </div>
                    <div class="row">
                        <label class="col-md-2">公司类型:</label>
                        <input class="col-md-8 col-md-offset-1" type="text" v-model="base.type">
                    </div>
                    <div class="row">
                        <label class="col-md-2">成立日期:</label>
                        <input class="col-md-8 col-md-offset-1" type="text" v-model="base.create_at">
                    </div>
                    <div class="row">
                        <label class="col-md-2">注册资本:</label>
                        <input class="col-md-8 col-md-offset-1" type="text" v-model="base.capital">
                    </div>
                    <div class="row">
                        <label class="col-md-2">地址:</label>
                        <input class="col-md-8 col-md-offset-1" type="text" v-model="base.address">
                    </div>

                    <!--<input type="text" placeholder="{{base.register_id}}">-->


                    <div class="modal-footer">

                        <button type="button" class="btn btn-primary" @click="changebase">提交更改</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal -->
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

    .row label {
        text-align: center;
    }
</style>
<script>
    export default {
        props: ['project_id'],
        data(){
            return {
                message: 'nnn',
                base: []
            };

        },
        mounted() {

            let url = '/admin/project_base/' + this.project_id;

            this.$http.get(url).then(function (response) {
                // 響應成功回調

                this.base = (response.data);
                console.log(this.base.state);

            }, function (response) {
                console.log(response);
                // 響應錯誤回調
            });

        },
        methods: {
            changebase(){

                let url = '/admin/change_project_base/' + this.project_id;

                this.$http.post(url, this.base).then(function (response) {
                    // 響應成功回調
                    console.log(response.body);
                    if (response.body === 'ok') {
                        alert('更新成功');


                    }

//                    this.base = (response.data);
                }, function (response) {
                    console.log(response);
                    // 響應錯誤回調
                });
            }
        }
    }
</script>
