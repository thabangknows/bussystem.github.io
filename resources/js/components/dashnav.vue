<template>
    <div>
        <div class="container">
            
<ul class="nav">
  <div class="col ">
    <li @click="$store.commit('openSchedule')" class="nav-item">
    <p style="font-size:16px" class="nav-link active" aria-current="page" href="">Schedule</p>
  </li>
  </div>
  <div class="col offset-md-4">
    <li @click="$store.commit('openBookings')" class="nav-item">
    <p style="font-size:16px" class="nav-link" href="">Bookings</p>
  </li>
  </div>
    <div class="col offset-md-4">
         <li class="nav-item">
    <p style="font-size:16px" class="nav-link disabled">Hi, {{ curUser.firstname }}</p>
  </li>
    </div>
</ul>

        </div>
    </div>
</template>

<script>

export default {
    name: 'dashnav',
    components: {

    },
    data() {
        return {
            curUser: this.$store.state.currentUser,
        }
    },


}
</script>

<style>

</style>