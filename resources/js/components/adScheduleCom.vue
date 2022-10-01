<template>
    <div v-for="(sc, index) in schedule" style="outline: 1px solid; borderRadius:7px; margin:15px;">

        <div style=" padding: 30px;" class="table-responsive is-light">
            <div style="backgroundColor:lightgrey; padding:5px; borderRadius:7px; color: white">
                <h2> From: <strong>{{ schedule[index].trip_from }}</strong> <br>
                    To: <strong>{{ schedule[index].trip_to }}</strong></h2>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Trip No</th>
                        <th scope="col">Time(24h)</th>

                    </tr>
                </thead>
                <tbody class="table-group-divider">

                    <tr>
                        <th scope="row">1</th>
                        <td>{{ schedule[index].trip1 }}</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>{{ schedule[index].trip2 }}</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>{{ schedule[index].trip3 }}</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>{{ schedule[index].trip4 }}</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>{{ schedule[index].trip5 }}</td>
                    </tr>




                </tbody>

            </table>
            <h5 style="backgroundColor:lightgrey; padding:5px; borderRadius:7px; color: white">Posted On:
                <strong>{{ schedule[index].created_at.substring(0, 10) }} At
                    {{ schedule[index].created_at.substring(10, 16) }}</strong></h5>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button @click="deleteSchedule(index)" class="btn btn-danger" type="button">Delete Schedule</button>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    name: 'adScheduleCom',
    data() {
        return {
            schedule: [],
        }
    },

    mounted() {
        this.getSchedule();
    },
    methods: {
        async getSchedule(state) {
            await axios
                .get("api/getschedule")
                .then((response) => {

                    console.log('getting schedule')
                    this.schedule = response.data;
                    console.log(this.schedule);
                })
                .catch((error) => {
                    console.log(error);
                });
        },

        deleteSchedule(index) {
            alert('You are about to delete a schedule')

            console.log('deleting the schedule at ', index);
            //get schedule id
            const id = this.schedule[index].id;
           
           axios.delete('api/deleteschedule/' + id).then((response) => {
            console.log(response);
            console.log('schedule deleted')
           }).catch((error) => {
            console.log(error);
           })
        }

    }

}
</script>