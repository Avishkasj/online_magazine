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
              class="list-group-item list-group-item-action active"
              >Dashboard</router-link
            >

            <!-- <a href="#" class="list-group-item list-group-item-action">Users</a> -->
            <router-link
              to="/admin2"
              class="list-group-item list-group-item-action"
              >Interactive Activity</router-link
            >
          </div>
        </div>
        <!-- Main Content -->
        <div class="col-md-9">
          <h2>Welcome to the Admin Dashboard</h2>
          <div class="card mt-4">
            <div class="card-header">Upload weekly Image</div>
            <div class="card-body">
              <!-- Description -->
              <p>
                Please upload this week's image for the children's magazine.
                This image is meant for children to download, paint, and then
                upload back to the system.
              </p>

              <!-- Input for uploading image -->
              <input
                type="file"
                @change="previewImage"
                accept="image/*"
                style="margin-bottom: 10px"
              />

              <!-- Image preview -->
              <div v-if="imageUrl">
                <img
                  :src="imageUrl"
                  alt="Preview"
                  style="
                    max-width: 300px;
                    max-height: 300px;
                    margin-bottom: 10px;
                  "
                />
              </div>

              <!-- Upload Button -->
              <button
                class="btn btn-primary"
                @click="uploadImage"
                :disabled="!selectedImage"
              >
                Upload Image
              </button>

              <!-- Upload success message -->
              <div
                v-if="uploadSuccess"
                class="alert alert-success"
                role="alert"
              >
                Image uploaded successfully!
              </div>
              <!-- Upload error message -->
              <div v-if="uploadError" class="alert alert-danger" role="alert">
                Error uploading image. Please try again.
              </div>
            </div>
          </div>

          <div class="card mt-4">
            <div class="card-header">User Details</div>
            <div class="card-body">
              <!-- Table for Recent Orders -->
              <table class="table">
                <thead>
                  <tr>
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Created At</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="user in users" :key="user.id">
                    <td>{{ user.id }}</td>
                    <td>{{ user.name }}</td>
                    <td>{{ user.created_at }}</td>
                    <td>Active</td>
                    <td>
                      <button
                        type="button"
                        class="btn btn-primary"
                        onclick="manage()"
                      >
                        <i class="fas fa-cogs"></i> Manage
                      </button>
                    </td>
                    <!-- Assuming all users are active -->
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
      users: [],
      imageUrl: "",
      uploadSuccess: false, // Track upload success
      uploadError: false, // Image preview URL
      selectedImage: null, // Initialize selectedImage to null
    };
  },
  created() {
    // Fetch users when the component is created
    this.getUsers();
  },
  methods: {
    async getUsers() {
      try {
        const response = await axios.get("http://127.0.0.1:8000/api/users", {
          withCredentials: true, // Include credentials if using CORS
        });
        this.users = response.data; // Assign fetched users to the users array
      } catch (error) {
        console.error("Error fetching users:", error);
      }
    },
    previewImage(event) {
      const file = event.target.files[0];
      if (file && file.type.startsWith("image/")) {
        this.selectedImage = file; // Set selectedImage to the selected file
        this.imageUrl = URL.createObjectURL(file); // Set the image preview URL
      }
    },
    async uploadImage() {
      try {
        // Create a FormData object to send the image file
        const formData = new FormData();
        formData.append("user_id", 1); // Assuming user ID is 1
        formData.append("image", this.selectedImage);

        // Make a POST request to upload the image
        const response = await axios.post(
          "http://127.0.0.1:8000/api/images",
          formData,
          {
            headers: {
              "Content-Type": "multipart/form-data",
            },
            withCredentials: true, // Include credentials if using CORS
          }
        );

        // Log the response
        console.log("Image uploaded successfully:", response.data);

        // Set upload success message
        this.uploadSuccess = true;
        this.uploadError = false; // Reset error message
      } catch (error) {
        // Log and handle the error
        console.error("Error uploading image:", error);

        // Set upload error message
        this.uploadSuccess = false; // Reset success message
        this.uploadError = true;
      }
    },
  },
};
</script>


<style scoped>
/* Add your component-specific styles here */
</style>
