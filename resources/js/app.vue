<template>
    <div>
       
        <div class="bo">
            <router-view></router-view>
        </div>
    
    </div>
</template>

<script>

export default {
    name: 'app',
    components: {

    },

    mounted(){
        console.log("component mounted")
    }
}
</script>

<style>
@media only screen and (min-width: 1200px) {
  .boxx {
   
  }
 
}

.bo {
    margin: 10px;
}
</style>

