<template>
    <div>
        <h4>Creating a new booking for {{ curUser.firstname }}</h4>

        <div style="padding:5%" class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Booking trip from" v-model="form.trip_from">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Booking trip to" v-model="form.trip_to">
            </div>
            <br>
            <div class="col-12">
                <br>
                <input type="date" class="form-control" placeholder="Trip date" v-model="form.date_trip">
            </div>
            <div class="col-12">
                <label class="form-label">Leaving time</label>
                <input type="time" class="form-control" placeholder="" v-model="form.time_trip">
            </div>
        </div>
        <br>
        <button @click="post_new_booking" class="btn btn-success" type="button">Continue</button>

    </div>
</template>

<script>
export default {
    name: 'newBooking',
    data() {
        return {
            curUser: this.$store.state.currentUser,

            form: {
                booked_by: '',
                trip_from: '',
                trip_to: '',
                date_trip: '',
                time_trip: '',
                accepted_check: false,
            },
        }
    },

    methods: {
        post_new_booking() {
            //pass foreign key
            this.form.booked_by = this.curUser.student_no
            console.log(this.form)

            axios.post('/api/addbooking', this.form).then(() => {
                console.log('booking added')
                alert("Booking added")
                
            }).catch((error) => {

                console.log('error hittttt')
                console.log(error.response.data.errors);

            })
        },
    }
}
</script>