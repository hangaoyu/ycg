<template>
    <div class="container">
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-3">
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="file-manager">
                                <h5>Folders</h5>
                                <ul class="folder-list col-lg-12"  v-for="type in types">
                                    <li class="col-lg-12">
                                        <button  @click="change_type(type)" class="btn col-lg-10 btn-success"><i class="fa fa-folder"></i>{{type.en_name}}
                                        </button>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-lg-offset-1 animated fadeIn">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="file-box" v-for="file in files">
                                <div class="file">
                                    <a href="#">
                                        <span class="corner"></span>
                                        <div class="image">
                                            <img alt="image" class="img-responsive" style=""
                                                 :src=file.imgsrc>
                                        </div>
                                        <div class="file-name" style="height: 100px">
                                            <br>
                                            <small>{{file.desr}}</small>
                                            <i @click="checkfile(file)" :class="{'check_file':file.is_check}"
                                               class="fa fa-4x fa-check-circle-o "
                                               aria-hidden="true"></i>
                                            <i class="fa fa-trash fa-2x" @click="delete_carousel(file)"
                                               aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</template>
<style scoped>
    html, body {
        height: 100%;
    }
    .container {
        position: relative;
        width: 100%;
    }
    button {
        width: 100%;
        text-align: left;
    }
    .file-box {
        margin-top: 20px;
        margin-right: 20px;
    }
    .fa-folder {
        color: white;
    }
    .fa-check-circle-o {
        position: absolute;
        /*padding: 10px;*/
        padding: 0 3px;
        border-radius: 28px;
        top: -20px;
        right: -20px;
        background-color: white;
        color: grey;
    }
    .check_file {
        color: green;
    }
    .fa-trash {
        position: absolute;
        bottom: 10px;
        right: 10px;
        transition: all 0.5s;
        -moz-transition: all 0.5s; /* Firefox 4 */
        -webkit-transition: all 0.5s; /* Safari and Chrome */
        -o-transition: all 0.5s;
        opacity: 1;
    }
</style>
<script>
    export default {
        props: ['type_id'],
        data(){
            return {
                files: [],
                types:[],

            };
        },
        mounted() {

            this.get_file_list();
            this.get_type_list();
        },
        watch: {
            'type_id': 'get_file_list'
        },
        methods: {
            get_type_list(){
                let url = '/admin/get_type_list/';
                this.$http.get(url).then(function (response) {
                    // 響應成功回調
                    console.log(response);
                    this.types = response.data;

                }, function (response) {
                    console.log(response);
                    // 響應錯誤回調
                });
            },
            change_type(type){
              this.type_id = type.id
            },
            get_file_list(){
                console.log(this.type_id);
                this.files = [];
                let url = '/admin/get_file_list/' + this.type_id;
                this.$http.get(url).then(function (response) {
                    // 響應成功回調
                    console.log(response);
//                    this.$set = ('files',response.data);

                    this.files = response.data;

                }, function (response) {
                    console.log(response);
                    // 響應錯誤回調
                });
            },
            checkfile(file){

                if (file.is_check === 1) {
                    file.is_check = 0
                }
                else {
                    file.is_check = 1

                }
                this.$http.post('/admin/check_carousel', file).then(function (response) {
                    // 響應成功回調
                    console.log(response);
                }, function (response) {
                    console.log(response);
                    // 響應錯誤回調
                });
            },
            delete_carousel(file){

                let index = this.files.indexOf(file)
                if (index !== -1) {
                    this.files.splice(index, 1)
                }
                if (confirm("是否确认删除")) {
                    let url = 'delete_carousel/';
                    this.$http.post(url, file).then(function (response) {
//                        // 響應成功回調

                        console.log(response);
                    }, function (response) {
                        console.log(response);
                        // 響應錯誤回調
                    });
                }
            }

        }
    }
</script>
