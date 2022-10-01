import axios from "axios";
import { createStore } from "vuex";

export default createStore({
    state: {
        //store data
        currentUser: [],
        allBookings: [],
        schedule: [],
        currentBookings: [],

        totalStudents: 0,
        totalBookings: 0,
        totalSchedules: 0,
    },
    mutations: {
        //change data in the state
      
    },
    actions: {
        //for api calls
        //dispatch

        //get schedule method
        async getSchedule(state) {
            await axios
                .get("/api/getschedule")
                .then((response) => {
                    console.log('getting schedule')
                    state.schedule = response.data;
                    console.log(state.schedule);
                })
                .catch((error) => {
                    console.log(error); 
                });
        },

        //get booking method
        async getBookings(state) {
            await axios
                .get("/api/getbookings")
                .then((response) => {
                    state.allBookings = response.data;
                    console.log(state.allBookings);
                })
                .catch((error) => {
                    console.log(error);
                });

            //filter data
            //get current user bookings
            const curStudentNo = state.rootState.currentUser.student_no;
            for (var i = 0; i < state.allBookings.length; i++) {
                if (state.allBookings[i].booked_by == curStudentNo) {
                    console.log(state.rootState.currentBookings);
                    state.rootState.currentBookings.push(state.allBookings[i]);
                    console.log(state.rootState.currentBookings);
                } else {
                    console.log("no bookings found for ", curStudentNo);
                }
            }
        },
    },
    getters: {},
});
