<template>
  <nav class="navbar navbar-expand-lg" style="background-color: #FB8500;">
    <div class="container-fluid">
      <!-- Image as an icon -->
      <a class="navbar-brand" href="#">
        <img src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/MAG.png" alt="Icon" width="50" height="50">
        Magazine
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-between" id="navbarText">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <router-link to="/register" class="nav-link">Register</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/login" class="nav-link">Login</router-link>
          </li>
        </ul>

        <!-- Right corner icons -->
        <div class="d-flex">
          <a class="nav-link me-3" href="#">
            <i class="fas fa-bell"></i>
          </a>
          <div class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
               <img src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/user.png" alt="Icon" width="20" height="20">
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </div>
        </div>
        <!-- End of right corner icons -->
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  // Your Vue component options
}
</script>

<style scoped>
/* Additional custom styles */
.navbar-nav .nav-link {
  color: black; /* Set the text color to black */
}
</style>
