<template>
  <div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <div class="form-floating mb-2">
              <h4><strong>{{ bookingToEdit.booked_by }}</strong> made a booking to
                <strong>{{ bookingToEdit.trip_to }}</strong>, from <strong>{{ bookingToEdit.trip_from }}</strong> on the
                <strong> {{ bookingToEdit.date_trip }}</strong> at <strong> {{ bookingToEdit.time_trip }}</strong>
              </h4>
            </div>

            <select v-model="sel_option" class="form-select" aria-label="Default select example">
            <p>Please select the option</p>
              <option value="Approved">Approved</option>
              <option value="Declined">Declined</option>
            </select>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button @click="updateBooking(bookingToEdit.id)" type="button" class="btn btn-primary">Update
              Booking</button>
          </div>
        </div>
      </div>
    </div>

    <div>


    </div>

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
                <th scope="col">Action</th>
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

                <td>
                  <button @click="valBooking(index)" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="btn btn-primary">Validate</button>
                </td>

              </tr>




            </tbody>

          </table>
        </div>
        <div v-else>
          <h2>No students bookings found</h2>
        </div>
        <br>
      </div>
     
    </div>
  </div>
</template>
<script>

export default {
  name: 'userBookings2',
  data() {
    return {
      bookings: [],
      bookingToEdit: [],

      sel_option: '',
    }
  },
  created() {
    this.getBookings();
  },

  methods: {
    async getBookings() {

      await axios.get("/api/getbookings")
        .then((response) => {
          this.bookings = response.data;
          console.log(this.bookings);
        })
        .catch((error) => {
          console.log(error);
        });

    },

    valBooking(index) {
      this.bookingToEdit = this.bookings[index]
    },

    async updateBooking(index) {
      console.log('Editing booking at ' + index);

      //get booking id
      const id = this.bookings[index].id;


      console.log(id)
      console.log(this.sel_option)


      if (this.sel_option == 'Approved') {
        await axios.put('api/updatebooking/' + id).then((response) => {
          console.log(response)
          alert('Booking Updated');
        }).catch((error) => {
          console.log(error);
        })
      } else {
        alert('Declined bookings will remain Pending')
      }


    },
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