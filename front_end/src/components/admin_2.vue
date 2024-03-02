<template>
  <div>
    <!-- Admin Dashboard Content -->
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Admin Dashboard</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <router-link to="/login" class="nav-link" @click="logout"
              >Logout</router-link
            >
          </li>
        </ul>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container-fluid mt-4">
      <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
          <div class="list-group">
            <router-link
              to="/admin"
              class="list-group-item list-group-item-action"
              >Dashboard</router-link
            >

            <!-- <a href="#" class="list-group-item list-group-item-action">Users</a> -->
            <a href="#" class="list-group-item list-group-item-action active"
              >Interactive Activity</a
            >
          </div>
        </div>
        <!-- Main Content -->
        <div class="col-md-9">
          <h2>Interactive Activity</h2>

          <div class="card mt-4">
            <div class="card-header">User Uploaded Images</div>
            <div class="card-body">
              <!-- Table for User Uploaded Images -->
              <table class="table">
                <thead>
                  <tr>
                    <th>User ID</th>
                    <th>Image</th>
                     <th>Uploaded At</th>
                    <th>Image Title</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(image, index) in data.activityImages" :key="index">
                    <td>{{ image.user_id }}</td>
                    <td>
                     <img :src="'http://localhost:8000/' + image.path" alt={{image.path}} style="max-width: 100px; max-height: 100px;">
                    </td>
                    <td>{{ image.upload_date }}</td>
                    <td>{{image.path}}</td>
                     <td>
                <select id="winnerSelect">
                    <option value="not_decided" selected>Not Decided</option>
                    <option value="winner">Winner</option>
                    <option value="not_winner">Not Winner</option>
                </select>
            </td>
                  </tr>
                </tbody>
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>



import axios from "axios"; // Import Axios for making HTTP requests

export default {
  data() {
    return {
      data: { activityImages: [] }, // Initialize data structure
    };
  },
  created() {
    // Fetch data when the component is created
    this.getData();
  },
  methods: {
    async getData() {
      try {
        const response = await axios.get("http://127.0.0.1:8000/api/getuimages", {
          withCredentials: true, // Include credentials if using CORS
        });
        this.data = response.data; // Assign fetched data to the data array
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    },
  },
};
</script>

<style scoped>
/* Add your component-specific styles here */
.table td,
.table th {
  color: black;
}
</style>
