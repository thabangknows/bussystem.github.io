<template>
    <div>
         <div>

        <br><br>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col">

                    </div>
                    <div class="card">
                        <h5 style="font-size:38px;" class="card-header"><strong>Current Bus Schedule</strong></h5>
                        <div class="card-body">
                            <schedule />
                            
                        </div>
                    </div>

                </div>
                <br>
                <div class="row">
                    <div style="margin:10px" class="col">
                        <div class="card">
                            <h5 style="font-weight: 700;" class="card-header">STUDENTS</h5>
                            <div class="card-body">
                                <br>
                                <h5 class="card-title"><strong>Total Students</strong></h5>
                                <h1 style="font-size:48px; color:blue">0</h1>
                                
                            </div>
                        </div>
                    </div>
                    <br>
                    <div style="margin:10px" class="col">
                        <div class="card">
                            <h5 style="font-weight: 700;" class="card-header">BOOKINGS</h5>
                            <div class="card-body">
                                <br>
                                <h5 class="card-title"><strong>Total Bookings</strong></h5>
                                <h1 style="font-size:48px; color:blue">0</h1>
                           
                           
                           </div>
                        </div>
                    </div>
                    <br>
                    <div style="margin:10px" class="col">
                        <div class="card">
                            <h5 style="font-weight: 700;" class="card-header">SCHEDULES</h5>
                            <div class="card-body">
                                <br>
                                <h5 class="card-title"><strong>Uploaded Schedules</strong></h5>

                                <h1 style="font-size:48px; color:blue">{{totSchedule}}</h1>

                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</template>
<script>
import schedule from '../schedule.vue'

export default {
    name: 'adHome',
    components: {
        schedule,
    },
    data() {
        return {
            totSchedule: 0 ,
        }
    },

    created(){

        //get total schedule
        this.totSchedule =  this.$store.state.totalSchedules;

        console.log(this.totSchedule);
    },
    
}

</script>