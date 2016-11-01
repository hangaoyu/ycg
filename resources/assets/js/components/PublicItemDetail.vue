<template>
    <div class="container">
        <div class="row">

        </div>
    </div>

</template>
<style scoped>


</style>
<script>
    export default {
        props: ['id'],
        data(){
            return {
                lists: []
            };
        },
        mounted() {

            console.log(this.id);

        },
        methods: {}
    }
</script>
