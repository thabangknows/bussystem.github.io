<template>
    <div>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Update Email</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Student No</label>
                            <div class="col-sm-10">
                                <input type="number" readonly class="form-control" id="staticEmail"
                                    :value="curUser.student_no">
                            </div>
                        </div>



                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Firstname</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" id="staticEmail"
                                    :value="curUser.firstname">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Lastname</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control" id="staticEmail"
                                    :value="curUser.lastname">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input v-model="n_mail" type="email" class="form-control" id="inputPassword">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button disabled @click="updateMail" type="button" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3>Student Information</h3>
            </div>
            <div class="card-body">
                <p style="font-weight:900" class="card-text">Student Number: {{ curUser.student_no }}</p>
                <p style="font-weight:900" class="card-text">Full Name: {{ curUser.lastname }} {{ curUser.firstname }}
                </p>
                <p style="font-weight:900" class="card-text">Student Email: {{ curUser.email }}</p>

                <a class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">Update student mail</a>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: 'studinfo',

    data() {
        return {
            curUser: this.$store.state.currentUser,

        }
    },
    methods: {
    
    }
}
</script>