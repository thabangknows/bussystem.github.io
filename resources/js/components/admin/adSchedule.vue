<template>
    <div>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"><strong>Creating a new Schedule</strong></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        <div class="form-floating mb-3">
                            <input v-model="form.trip_from" type="text" class="form-control">
                            <label for="floatingInput">Bus from</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input v-model="form.trip_to" type="text" class="form-control">
                            <label for="floatingInput">Bus to</label>
                        </div>
                        <p>There are 5 trips for day, please specify the times in <strong>24hr</strong></p>

                        <div class="form-floating mb-3">
                            <input v-model="form.trip1" type="text" class="form-control">
                            <label for="floatingInput">trip 1</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input v-model="form.trip2" type="text" class="form-control">
                            <label for="floatingInput">trip 2</label>
                        
                        </div>
                        <div class="form-floating mb-3">
                            <input v-model="form.trip3" type="text" class="form-control">
                            <label for="floatingInput">trip 3</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input v-model="form.trip4" type="text" class="form-control">
                            <label for="floatingInput">trip 4</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input v-model="form.trip5" type="text" class="form-control">
                            <label for="floatingInput">trip 5</label>
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button @click="postSchedule" type="button" class="btn btn-primary">Post Schedule</button>
                    </div>
                </div>
            </div>
        </div>

        <h1>Bus Schedule</h1>

            <adScheduleCom />
<br>
        <div>
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">Create New Schedule</button>

        </div>
    </div>
</template>

<script>
import adScheduleCom from '../adScheduleCom.vue'
export default {
    name: 'adSchedule',
    components: {
        adScheduleCom,
    },
    
    data() {
        return {
            form: {
                trip_from: '',
                trip_to: '',
                trip1: '',
                trip2: '',
                trip3: '',
                trip4: '',
                trip5: '',
            }
        }
    },

    methods: {
        postSchedule() {
            axios.post('/api/addschedule', this.form).then(() => {
                alert('schedule added');

                
            }).catch((error) => {

                console.log('error hittttt')
                console.log(error);

            })
        },

       
    }
}
</script>