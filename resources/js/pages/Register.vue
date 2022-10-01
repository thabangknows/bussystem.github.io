<template>
    <div class="form">

        <div class="frm">
            <h3>Register account</h3>
            <input type="text" placeholder="Firstname" v-model="form.firstname" required>
            <input type="text" placeholder="Lastname" v-model="form.lastname" required>
            <input type="number" placeholder="Student number" v-model="form.student_no" required>
            <input type="email" placeholder="Email" v-model="form.email">
            <input type="password" placeholder="Password" v-model="form.password" required>
            <button @click="addUser" type="button" class="btn btn-dark ">Create account</button>

            <p style="font-size:16px">Already have an account? <router-link to="./login">Login</router-link>
            </p>
            <router-link style="font-size:16px; color:grey" to="./">Go to home</router-link>
        </div>
    </div>
</template>

<script>

export default {
    name: 'Register',
    data() {
        return {
            form: {
                firstname: '',
                lastname: '',
                student_no: '',
                email: '',
                password: ''
            }
        }
    },

    methods: {
        addUser() {
            console.log(this.form)

            axios.post('/api/register', this.form).then(() =>{
                console.log('user added')
                this.$router.push({name: "Login"})
                console.log("user redirected to login");
            }).catch((error) =>{
                
                console.log('error hittttt')
                console.log(error.response.data.errors);
                
            })

        }
    }
}
</script>

<style>
.frm {
    margin-top: 20%;
    text-align: center;
    width: 15rem;
    margin: auto;
}

.frm input {
    background-color: rgb(231, 228, 228);
    padding: 10px;
    border-radius: 7px;
    margin-bottom: 5px;
}

</style>