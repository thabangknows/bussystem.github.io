<template>
    <div>
        <div>
            <navbar />
            <hereos />
            <fter />
        </div>
    </div>
</template>

<script>
import navbar from '../components/navbar.vue'
import hereos from '../components/hereos.vue'
import fter from '../components/fter.vue'

export default {
    name: 'home',

    components: {
        navbar,
        hereos,
        fter,
    }

}
</script>

<style>

</style>