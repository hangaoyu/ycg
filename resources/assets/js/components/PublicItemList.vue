<template>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="ibox-content text-center">
                    <h1>Nicki Smith</h1>
                    <div class="m-b-sm">
                        <img alt="image" class="img-circle" src="img/a8.jpg">
                    </div>
                    <p class="font-bold">Consectetur adipisicing</p>

                    <div class="text-center">
                        <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                        <a class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> Love</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>
<style scoped>


</style>
<script>
    export default {
        props: ['type_id'],
        data(){
            return {
                lists: []
            };
        },
        mounted() {
            console.log('sdas');
            console.log(this.type_id);

        },
        methods: {}
    }
</script>
