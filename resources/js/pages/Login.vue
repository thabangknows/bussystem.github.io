<template>
    <div class="form">
        <h3>Login</h3>
        <div class="frmm">

            <input type="number" v-model="form.student_no" placeholder="Student number" required>
            <input type="password" v-model="form.password" placeholder="Password" required>
            <p>{{ errorMes }}</p>
            <button @click="adminUser" type="button" class="btn btn-dark ">Login</button>

            <p style="font-size:16px">Do not have an account? <router-link to="./register">Register</router-link>
            </p>
            <router-link style="font-size:16px; color:grey" to="./">Go to home</router-link>
        </div>
    </div>
</template>

<script>
import { escapeHtmlComment } from '@vue/shared';


export default {
    name: 'login',
    data() {
        return {
            curUser: [],
            errorMes: '',
            form: {
                student_no: '',
                password: ''
            }
        }
    },

    methods: {
        //check if its admin or user tryng to log in
        adminUser(){
            //admin
            const admin_no = '21';
            const admin_password = 'makoma';
            console.log('admin or user')
            if (this.form.student_no === admin_no || this.form.password === admin_password) {
                console.log("admin detected")
                this.$router.push({ name: "Admin" });
                return;
            }
            else {
                this.logUser();
            }    
        },

        //login user
        logUser() {
            console.log("loggin user");
            axios.post('api/login', this.form).then((response) => {
                    this.curUser = response.data;
                    this.$router.push({ name: "Dashboard" });
                    this.$store.state.currentUser = this.curUser;
                    console.log("dashboard loaded")
                }).catch((error) => {
                    this.errorMes = error.response.data.errors.student_no.student_no
                    console.log(this.errorMes);
                })
        }
    }

}
</script>

<style>
.form {
    margin-top: 30%;
    text-align: center;
    width: 15rem;
    margin: auto;
}

.frmm input {
    background-color: rgb(231, 228, 228);
    padding: 10px;
    border-radius: 7px;
    margin-bottom: 5px;
    
}
</style>