<template>
    <div class="container">

        <i class="fa fa-trash fa-2x" @click="delete_project" aria-hidden="true"></i>

    </div>

</template>
<style scoped>
    .container {
        width: 100%;
        color: white;
        overflow: hidden;


    }

    i {

        float: right;
        padding: 10px;
        color: red;
        background-color: white;

    }

    i :hover {
        background-color: lightgrey;
    }


</style>
<script>
    export default {
        props: ['delete_id','url'],

        methods: {
            delete_project(){
                if (confirm("是否确认删除")) {
                    let url = this.url+'/' + this.delete_id;
                    console.log(url);
                    this.$http.delete(url).then(function (response) {
//                        // 響應成功回調
                        console.log(response);
                        location.reload();
                    }, function (response) {
                        console.log(response);
                        // 響應錯誤回調
                    });
                }

            }
        }
    }
</script>
