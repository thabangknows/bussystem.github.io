<template>
    <div>
        <div>
            <nav class="navbar bg-light">
                <div class="container-fluid">
                    <span data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                        aria-controls="offcanvasScrolling" uk-icon="icon:menu; ratio:2"></span>
                    <h1 class="">Welcome, Mr Makgoba</h1>
                    <form class="d-flex" role="search">

                        <button class="btn btn-primary" type="button">Logout </button>
                    </form>
                </div>
            </nav>



            <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
                id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Bus Schedule Management System</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <br><br>
                    <ul style="border-radius: 7px;" class="list-group list-group-flush">
                        <li style="list-style:none; fontSize:36px; padding: 25px; fontWeight:900; backgroundColor:lightgrey; margin:7px; border-radius: 7px 7px 0px 0px" class="nav-item" role="presentation">
                            <button style="backgroundColor:lightgrey; color:grey" class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true">HOME</button>
                        </li>
                        <li style="list-style:none; fontSize:36px; padding: 25px; fontWeight:900;backgroundColor:lightgrey; margin:7px" class="nav-item" role="presentation">
                            <button style="backgroundColor:lightgrey; color:grey" class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false">SCHEDULE</button>
                        </li>
                        <li style="list-style:none; fontSize:36px; padding: 25px; fontWeight:900; margin:7px; backgroundColor:lightgrey;" role="presentation">
                            <button style="backgroundColor:lightgrey; color:grey" class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#contact-tab-pane" type="button" role="tab"
                                aria-controls="contact-tab-pane" aria-selected="false">BOOKINGS</button>
                        </li>
                        <li style="list-style:none; fontSize:36px; padding:25px; fontWeight:900; margin:7px; backgroundColor:lightgrey; border-radius: 0px 0px 7px 7px " class="nav-item" role="presentation">
                            <button style="backgroundColor:lightgrey; color:grey" class="nav-link" id="disabled-tab" data-bs-toggle="tab"
                                data-bs-target="#disabled-tab-pane" type="button" role="tab"
                                aria-controls="disabled-tab-pane" aria-selected="false" >STUDENTS</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0"><adHome /></div>
  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0"><adSchedule /></div>
  <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0"><adBookings /></div>
  <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0"><adStudents /></div>
</div>

       

    </div>
</template>
<script>
import adHome from '../components/admin/adHome.vue'
import adBookings from '../components/admin/adBookings.vue'
import adSchedule from '../components/admin/adSchedule.vue'
import adStudents from '../components/admin/adStudents.vue'

export default {
    name: 'admin',
    components: {
        adHome,
        adBookings,
        adSchedule,
        adStudents,
    },

    data() {
        return {
            showHome: false,
            showSchedule: false,
            showBookings: false,
            showStudents: false,
        }
    },

    mounted() {

    },

    methods: {
        openHome() {
            this.showHome = true;


            showSchedule = false;
            showBookings = false;
            showStudents = false;
        },
        openSchedule() {
            this.showSchedule = true;

            showHome = false;
            showBookings = false;
            showStudents = false;
        },
        openBookings() {
            this.showBookings = true;

            showSchedule = false;
            showHome = false;
            showStudents = false;
        },
        openStudents() {
            this.showStudents = true;

            showSchedule = false;
            showBookings = false;
            showHome = false;
        },

    },
}
</script>