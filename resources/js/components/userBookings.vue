<template>
  <div class="print_table">


    <div class="table-responsive">
      <div v-if="bookings.length > 0">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Booking No</th>
              <th scope="col">Booked By</th>
              <th scope="col">Trip Trom</th>
              <th scope="col">Trip To</th>
              <th scope="col">Date</th>
              <th scope="col">Time</th>
              <th scope="col">Accepted</th>
            </tr>
          </thead>
          <tbody>

            <tr v-for="(book, index) in bookings" :ref="book.created_at">
              <th scope="row">{{ index + 1 }}</th>
              <td>{{ book.booked_by }}</td>
              <td>{{ book.trip_from }}</td>
              <td>{{ book.trip_to }}</td>
              <td>{{ book.date_trip }}</td>
              <td>{{ book.time_trip }}</td>

              <div v-if="book.accepted_check == 0">
                <td>Pending</td><br>
              </div>
              <div v-else>
                <td>Accepted</td><br>
              </div>


            </tr>




          </tbody>

        </table>
      </div>
      <div v-else>
        <h2>No bookings found</h2>
      </div>
      <br>
    </div>
    
  </div>
</template>
<script>
import book from './fter.vue'
export default {
  name: 'userBookings',
  data() {
    return {
      bookings: this.$store.state.currentBookings,
    }
  },

  methods: {
    exportPDF() {
      
      //window.print(book);

      axios.get('api/exportbooking').then((res) => {
        console.log(res);
        console.log('exporting to PDF...');
      }).catch((error) => {
        console.log('error: ' + error.message)
      })
    }
  },
  

}
</script>

<style>
@media print {
  # {
    display: none;
  }
  .print_table {
    display: block;
  }
}
</style>