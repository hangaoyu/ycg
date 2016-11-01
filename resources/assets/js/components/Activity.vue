<template>
    <div class="container">
        <div class="row">

            <div v-for="type in types">
                <div class="col-md-1 type">
                    <button type="button" class="btn btn-default m-r-sm" @click="change_type(type)">{{type.type_name}}
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 type" v-for="item in items">
                <div class="ibox-content text-center">
                    <h1>{{item.title}}</h1>
                    <div class="m-b-sm">
                        <img alt="image" class="img-circle" :src=item.img_src>
                    </div>
                    <h1 class="font-bold">{{item.time}}</h1>

                    <div class="text-center">
                        <a class="btn btn-xs btn-white"  @click="item_detail(item)"><i class="fa fa-heart"></i> 详情 </a>
                        <a class="btn btn-xs btn-primary" @click="delete_item(item)"><i class="fa fa-trash"></i> 删除</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>
<style scoped>
    .type {
        margin-bottom: 20px;
    }
    h1 {
        height: 30px;
        font-size: 12px;
        line-height: 15px;
        overflow: hidden;
    }
    img{
        width: 222px;
        height: 222px;
    }

</style>
<script>

    /*eslint-disable no-new*/
    export default {

        data(){
            return {
                types: [],
                items: [],
                type_id: 1
            };
        },
        mounted() {
            this.fecth_type();
            this.fetch_item_lists();
        },
        watch: {
            'type_id': 'fetch_item_lists'
        },
        methods: {
            fecth_type(){
                let url = '/admin/activity_type/';
                this.$http.get(url).then(function (response) {
                    // 響應成功回調
                    this.types = (response.data);
                }, function (response) {
                    console.log(response);
                    // 響應錯誤回調
                });
            },
            fetch_item_lists(){
                let url = '/admin/activity_items/' + this.type_id;
                this.$http.get(url).then(function (response) {
                    // 響應成功回調
                    this.items = (response.data);

                }, function (response) {
                    console.log(response);
                    // 響應錯誤回調
                });
            },
            change_type(type){
                console.log(type.id);
                this.type_id = type.id;
            },
            delete_item(item){
                if (confirm("是否确认删除")) {
                    let url = '/admin/activity_delete_item';
                    console.log(url);
                    this.$http.post(url,item).then(function (response) {
                     // 響應成功回調
                        let index = this.items.indexOf(item)
                        if (index !== -1) {
                            this.items.splice(index, 1)
                        }
                        console.log(response);

                    }, function (response) {
                        console.log(response);
                        // 響應錯誤回調
                    });
                }
            },
            item_detail(item){
                let url= 'activity_item_detail/'+item.id;
                window.location.href=url;
            }
        }
    }
</script>
