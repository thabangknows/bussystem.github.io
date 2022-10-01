<template>
    <div>
        <h3 style="text-align:right; backgroundColor:#333; color:white; border-radius: 7px; padding:10px">Hi, {{
        curUser.firstname }} <button class="btn btn-outline-secondary btn-lg"><strong>
                    <router-link to="./">Logout</router-link>
                </strong></button></h3>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                    type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Schedule</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                    type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Bookings</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                tabindex="0">
                <div class="container-fluid">
                    <h1>hello</h1>
                </div>
                <schedule />
            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <booking />
            </div>
        </div>


        <br>
        <studinfo />
    </div>
</template>

<script>
import dashnav from '../components/dashnav.vue'
import booking from '../components/booking.vue'
import schedule from '../components/schedule.vue'
import studinfo from '../components/studinfo.vue'

export default {
    name: 'Dashboard',
    components: {
        dashnav,
        booking,
        schedule,
        studinfo,
    },
    data() {
        return {
            curUser: this.$store.state.currentUser,
        }
    },
    mounted() {
        console.log('feedback:', this.opnBk, this.$store.state.me)
        this.$store.dispatch('getBookings')
    }


}
</script>

<style>

</style>