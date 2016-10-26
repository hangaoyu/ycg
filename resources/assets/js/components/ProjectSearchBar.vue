<template>
    <div class="container">

        <div class="input-group col-md-6 ">
            <input type="text" name="q" class="form-control"
                   placeholder="search..." v-model="keyword"/>
              <span class="input-group-btn" style="background-color: #00a65a">
                <button  @click="search" type='submit' name='search' id='search-btn'  class="btn btn-primary"><i
                        class="fa fa-search"></i></button>
              </span>
        </div>

    </div>

</template>
<style scoped>
    .container {


    }



</style>
<script>
    export default {
//
        data(){
            return {
                keyword: ''
            };
        },
        methods: {
            search(){


            }
        }
    }
</script>
