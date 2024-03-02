<template>
  <div>

    <!-- Admin Dashboard Content -->
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" @click="logout">Logout</a>
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
                    <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
                    <a href="#" class="list-group-item list-group-item-action">Users</a>
                    <a href="#" class="list-group-item list-group-item-action">Reports</a>
                </div>
            </div>
            <!-- Main Content -->
            <div class="col-md-9">
                <h2>Welcome to the Admin Dashboard</h2>
               <div class="card mt-4">
    <div class="card-header">
        Upload Profile Image
    </div>
    <div class="card-body">
        <!-- Description -->
        <p>Please select an image for your profile:</p>
        
        <!-- Input for uploading image -->
        <input type="file" @change="previewImage" accept="image/*" style="margin-bottom: 10px;">
        
        <!-- Image preview -->
        <div v-if="imageUrl">
            <img :src="imageUrl" alt="Preview" style="max-width: 300px; max-height: 300px; margin-bottom: 10px;">
        </div>
        
        <!-- Upload Button -->
        <button class="btn btn-primary" @click="uploadImage" :disabled="!selectedImage">Upload Image</button>
    </div>
</div>

                <div class="card mt-4">
                    <div class="card-header">
                        Recent Orders
                    </div>
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
                                    <td>Active</td> <!-- Assuming all users are active -->
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
import axios from 'axios';

export default {
  data() {
    return {
      users: [] // Initialize users array to store fetched users
    };
  },
  created() {
    // Fetch users when the component is created
    this.getUsers();
  },
  methods: {
    async getUsers() {
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/users', {
          withCredentials: true // Include credentials if using CORS
        });
        this.users = response.data; // Assign fetched users to the users array
      } catch (error) {
        console.error('Error fetching users:', error);
      }
    }
  }
}
</script>


<style scoped>
/* Add your component-specific styles here */
</style>
