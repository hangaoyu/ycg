<template>
    <div class="container">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>公司股东</h5>
            </div>
            <div class="ibox-content">
                <div>
                    <div class="feed-activity-list" v-for="holder in holders">

                        <div class="feed-element animated fadeIn">
                            <div class="media-body ">

                                <strong class="col-md-8">{{holder.holder}}</strong>
                                <input type="text" class="col-md-8 editor-input" v-model="holder.holder">
                                <div class="edit-action">
                                    <button class="btn btn-primary m" @click="edit_holder(holder)">edit</button>
                                    <button class="btn btn-danger m" @click="delete_holder(holder)">delete</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="feed-element">
                        <div class="new-holder">
                            <input class="col-md-12" type="text" v-model="newholder.holder" style="height: 50px">
                            <button class="col-md-2 col-md-offset-10 btn btn-primary  m" @click="addholder"><i
                                    class="fa fa-arrow-down"></i> Add More
                            </button>
                        </div>
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

    .row {
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .row label {
        text-align: center;
    }

    .new-holder {
        display: flex;
        flex-direction: row;
        justify-content: center;
    }

    .edit-action {
        float: right;
    }

    .editor-input {
        margin: 10px;
    }

</style>
<script>
    export default {
        props: ['project_id'],
        data(){
            return {
                holders: [],
                newholder: {
                    holder: '',
                    project_id: ''
                }
            };
        },
        mounted() {
            this.newholder.project_id = this.project_id;
            let url = '/admin/project_holder/' + this.project_id;
            console.log(this.newholder.project_id);
            this.$http.get(url).then(function (response) {
                // 響應成功回調
                this.holders = (response.data);
            }, function (response) {
                console.log(response);
                // 響應錯誤回調
            });

        },
        methods: {
            addholder(){
                if (this.newholder.holder === '') {
                    alert('请输入内容');
                }
                else {
                    this.$http.post('/admin/add_project_holder', this.newholder).then(function (response) {
                        // 響應成功回調
                        this.holders.push(response.data);
                    }, function (response) {
                        console.log(response);
                        // 響應錯誤回調
                    });
                    this.newholder.holder = '';
                }

            },
            delete_holder(holder){

                if (confirm("是否确认删除")) {
                    this.$http.post('/admin/delete_project_holder', holder).then(function (response) {
                        // 響應成功回調
                        console.log(holder);

                        let index = this.holders.indexOf(holder)
                        if (index !== -1) {
                            this.holders.splice(index, 1)
                        }


                    }, function (response) {
                        console.log(response);
                        // 響應錯誤回調
                    });
                }


            },
            edit_holder(holder){

                if (confirm("是否确认修改")) {
                    this.$http.post('/admin/edit_project_holder', holder).then(function (response) {
                        // 響應成功回調
                        alert('修改成功')
//                        console.log(holder);
//                        this.holders.pop(holder);

                    }, function (response) {
                        console.log(response);
                        // 響應錯誤回調
                    });
                }


            }
        }
    }
</script>
