<template>
    <div class="container">

        <h4 class="row"><strong class="col-md-3">注册号:</strong><input class="col-md-9" type="text" v-model="base.register_id"></h4>
        <h4 class="row"><strong class="col-md-3">项目名称:</strong><input class="col-md-9" type="text" v-model="base.name"></h4>
        <h4 class="row"><strong class="col-md-3">经营状态:</strong><input class="col-md-9" type="text" v-model="base.state"></h4>
        <h4 class="row"><strong class="col-md-3">法定代表:</strong><input class="col-md-9" type="text" v-model="base.person"></h4>
        <h4 class="row"><strong class="col-md-3">公司类型:</strong><input class="col-md-9" type="text" v-model="base.type"></h4>
        <h4 class="row"><strong class="col-md-3">成立日期:</strong><input class="col-md-9" type="text" v-model="base.create_at"></h4>
        <h4 class="row"><strong class="col-md-3">注册资本:</strong><input class="col-md-9" type="text" v-model="base.capital"></h4>
        <p class="row"><i  class="col-md-3 fa fa-map-marker"></i><input  class=" col-md-9" type="text" v-model="base.address"></p>
        <hr>
        <h4>项目简介</h4>
        <p class="row"><textarea  class="col-md-10 col-md-offset-1"  v-model="base.desrc"></textarea></p>
        <hr>
        <h4>项目描述</h4>
        <p class="row"><textarea  class="col-md-10 col-md-offset-1" v-model="base.body"></textarea></p>
        <div class="user-button">
            <div class="row">
                <div class="col-md-4">
                    <button @click="changebase" type="button"
                            class="btn btn-primary btn-sm btn-block"><i
                            class="fa fa-arrow-down"></i> editor
                    </button>
                </div>

            </div>
        </div>

    </div>

</template>
<style scoped>
    input {
        border: 0px;
        background-color: transparent;
    }
    textarea{
        height: 100px;
    }
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
