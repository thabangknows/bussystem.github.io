<template>
    <div>
        <h1>My Students</h1>
            <hr class="border-primary border-3 opacity-75">
        <div class="table-responsive">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Student #</th>
      <th scope="col">Email</th>
      <th scope="col">Joined On</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(student, index) in students">
      <th scope="row"> {{index + 1}} </th>
      <td>{{student.firstname}}</td>
      <td>{{student.lastname}}</td>
      <td>{{student.student_no}}</td>
      <th>{{student.email}}</th>
      <th>{{student.created_at.substring(0,10)}}</th>

    </tr>
    
  </tbody>
</table>
        </div>
    </div>
</template>

<script>
export default {
    name: 'adStudents',
    data() {
        return {
            students: [],
        }
    },
    mounted() {
        this.getStudents();
    },
    methods: {
        async getStudents(){

            await axios.get("api/getusers").then((response) => {
                this.students = response.data;
                console.log('students')
                console.log(this.students);
            }).catch((error) => {
                console.log('cannot get students')
            })
        }
    }
}
</script>