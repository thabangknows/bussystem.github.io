<template>
    <div>
        <h3>Your bookings</h3>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button @click="open_new_booking" class="btn btn-primary" type="button">Create new booking</button>
        </div>
        <div v-if="show_create_booking">
            <newBooking />

        </div>
        <div v-else>
            <user-bookings />
        </div>
        
    </div>
</template>
<script>
import userBookings from './userBookings.vue'
import newBooking from './newBooking.vue'
export default {
    name: 'bookings',
    components: { 
        userBookings,
        newBooking,
    },
    data() {
        return {
            show_create_booking: false,
        }
    },
    methods: { 
        open_new_booking () {
            this.show_create_booking = true;
        }
    }
}
</script>