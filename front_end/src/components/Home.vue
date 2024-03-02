

<template>
  <div>
    <!-- Include the navigation bar component -->
    <NavBar />

    <header>
      <div>
        <div class="header-blue">
          <nav
            class="navbar navbar-light navbar-expand-md navigation-clean-search"
          ></nav>
          <div class="container hero">
            <div class="row">
              <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                <h1>Online Magazine</h1>
                <p>
                  Welcome to MAG, where imagination meets exploration! Our online magazine is a vibrant hub
                   designed exclusively for young minds to embark on thrilling adventures through the power of reading,
                    creativity, and discovery.<br />
                </p>
                <button
                  class="btn btn-light btn-lg action-button"
                  type="button"
                >
                  Learn More<i class="fa fa-long-arrow-right ml-2"></i>
                </button>
              </div>
              <div
                class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder"
              >
                <div class="iphone-mockup">
                  <img
                    class="device"
                    src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/buny.png"
                  />
                  <!--  <div class="screen">
							</div>
							
							-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="container">
      <div class="row m-5">
        <!-- Left side card -->
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">New Week</h5>
              <img
                src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/forp1.png"
                class="card-img-top"
                alt="Book Title"
                width="400"
                height="600"
              />
              <!-- <img src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/MAG.png" alt="Icon" width="50" height="50"> -->
            </div>
          </div>
        </div>

        <!-- Right side text content -->
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Download, Color, and Upload</h5>
              <p class="card-text">
                Here's a fun activity for you! Follow these steps:
              </p>
              <ol>
                <li>
                  Download the image by clicking the "Download Image" button
                  below.
                </li>
                <li>
                  Color the image creatively using your favorite colors,
                  markers, or crayons.
                </li>
                <li>
                  Upload your colored version of the image using the "Upload
                  Image" button.
                </li>
              </ol>
              <p class="card-text">
                Each week, we'll select a winner from the uploaded images!
              </p>
              <a
                href="/path/to/downloadable/image.jpg"
                download="coloring_image.jpg"
                class="btn btn-primary"
                >Download Image</a
              >
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
                @click="uploaduImage"
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
              <p class="mt-3" id="uploadMessage"></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Content Area -->
    <router-view />
    <!-- Horizontal Scrollable Product Carousel -->
    <section class="product-carousel py-5">
      <div class="container">
        <h2 class="text-center mb-5">Featured Story Books</h2>
        <div class="row flex-nowrap overflow-auto">
          <!-- Add your carousel items here -->
          <!-- Card 1 -->
          <div class="col">
            <div class="card">
              <img
                src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/sb1.jpeg"
                class="card-img-top"
                alt="Book Title"
                height="350"
              />
              <div class="card-body">
                <p class="card-text">THE WAY OF THE WOODS</p>
                <a href="https://monkeypen.com/blogs/news/the-way-of-the-woods-free-children-book" class="card-link">
                  <p class="card-text">Read More</p>
                </a>
              </div>
            </div>
          </div>
          <!-- Repeat the following block for each additional card -->
          <!-- Card 2 -->
          <div class="col">
            <div class="card">
              <img
                src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/sb2.jpeg"
                class="card-img-top"
                alt="Book Title"
                 height="350"
              />
              <div class="card-body">
                <p class="card-text">PIRATES COVE</p>
                 <a href="https://monkeypen.com/blogs/news/pirates-cove-free-children-book" class="card-link">
                  <p class="card-text">Read More</p>
                </a>
              </div>
            </div>
          </div>
          <!-- Card 3 -->
          <div class="col">
            <div class="card">
              <img
                src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/sb3.jpeg"
                class="card-img-top"
                alt="Book Title"
                height="350"
              />
              <div class="card-body">
                <p class="card-text">THE HIKE</p>
                 <a href="https://monkeypen.com/blogs/news/the-hike-free-children-book" class="card-link">
                  <p class="card-text">Read More</p>
                </a>
              </div>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="col">
            <div class="card">
              <img
                src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/sb4.jpeg"
                class="card-img-top"
                alt="Book Title"
                 height="350"
              />
              <div class="card-body">
                <p class="card-text">I FOUND A FROG</p>
                 <a href="https://monkeypen.com/blogs/news/i-found-a-frog-free-children-book" class="card-link">
                  <p class="card-text">Read More</p>
                </a>
              </div>
            </div>
          </div>
          <!-- Card 5 -->
          <div class="col">
            <div class="card">
              <img
                src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/sb5.jpeg"
                class="card-img-top"
                alt="Book Title"
                height="350"
              />
              <div class="card-body">
                <p class="card-text">DO YOU WONDER </p>
                <a href="https://monkeypen.com/blogs/news/do-you-wonder-how-snakes-slither-free-children-book" class="card-link">
                  <p class="card-text">Read More</p>
                </a>
              </div>
            </div>
          </div>

          <!-- Add more cards as needed -->
        </div>
      </div>
    </section>

    <section class="wrapper">
      <div class="container">
        <div class="row">
          <div class="col text-center mb-3">
            <h1 class="lead">This Week Top Winners</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card text-dark">
              <img
                class="card-img"
                src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/forp1.png"
                alt="Image 1"
              />
              <div class="card-body">
                <h4 class="card-title">Winner 1</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card text-dark">
              <img
                class="card-img"
                src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/forp1.png"
                alt="Image 2"
              />
              <div class="card-body">
                <h4 class="card-title">Winner 2</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card text-dark">
              <img
                class="card-img"
                src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/forp1.png"
                alt="Image 3"
              />
              <div class="card-body">
                <h4 class="card-title">Winner 3</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card text-dark">
              <img
                class="card-img"
                src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/forp1.png"
                alt="Image 4"
              />
              <div class="card-body">
                <h4 class="card-title">Winner 4</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card text-dark">
              <img
                class="card-img"
                src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/forp1.png"
                alt="Image 5"
              />
              <div class="card-body">
                <h4 class="card-title">Winner 5</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card text-dark">
              <img
                class="card-img"
                src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/forp1.png"
                alt="Image 6"
              />
              <div class="card-body">
                <h4 class="card-title">Winner 6</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- count dowc -->

    <div class="container">
      <h2 class="mt-5 mb-4">Latest Blog Posts</h2>
      <div class="row">
        <!-- Blog Post 1 -->
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img
              src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/toy1.jpeg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">10 holiday facts</h5>
              <p class="card-text">
                We at B. are always keen to discover something new, no matter
                the season! And given that festive celebrations are right around
                the corner,
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">January 1, 2024</small>
                <a
                  href="https://mybtoys.com/blog/10-fun-holiday-facts/"
                  class="btn btn-sm btn-outline-secondary"
                  >Read more</a
                >
              </div>
            </div>
          </div>
        </div>

        <!-- Blog Post 2 -->
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img
              src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/toy2.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Benefits of music toy</h5>
              <p class="card-text">
                Make some noise with musical toys from B. toys! Explore our
                creative and engaging line of musical toys for kids and toddlers
                in this handy gift guide
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">January 2, 2024</small>
                <a
                  href="https://mybtoys.com/blog/3-benefits-of-musical-toys-top-gift-ideas/"
                  class="btn btn-sm btn-outline-secondary"
                  >Read more</a
                >
              </div>
            </div>
          </div>
        </div>

        <!-- Blog Post 3 -->
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img
              src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/toy3.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Gifts for Kids: Stocking Stuffers</h5>
              <p class="card-text">
                s a magical place filled with friendly characters, musical
                adventures, and… toys that double as great stocking stuffers! If
                you’re looking to leave little
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">January 3, 2024</small>
                <a
                  href="https://mybtoys.com/blog/gifts-for-kids-stocking-stuffers/"
                  class="btn btn-sm btn-outline-secondary"
                  >Read more</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    

    <div class="container">
      <div class="row">
        <!-- Blog Post 1 -->
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img
              src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/toy4.jpeg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">10 holiday facts</h5>
              <p class="card-text">
                We at B. are always keen to discover something new, no matter
                the season! And given that festive celebrations are right around
                the corner,
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">January 1, 2024</small>
                <a
                  href="https://mybtoys.com/blog/10-fun-holiday-facts/"
                  class="btn btn-sm btn-outline-secondary"
                  >Read more</a
                >
              </div>
            </div>
          </div>
        </div>

        <!-- Blog Post 2 -->
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img
              src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/toy5.jpeg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Benefits of music toy</h5>
              <p class="card-text">
                Make some noise with musical toys from B. toys! Explore our
                creative and engaging line of musical toys for kids and toddlers
                in this handy gift guide
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">January 2, 2024</small>
                <a
                  href="https://mybtoys.com/blog/3-benefits-of-musical-toys-top-gift-ideas/"
                  class="btn btn-sm btn-outline-secondary"
                  >Read more</a
                >
              </div>
            </div>
          </div>
        </div>

        <!-- Blog Post 3 -->
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img
              src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/toy6.jpeg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Gifts for Kids: Stocking Stuffers</h5>
              <p class="card-text">
                s a magical place filled with friendly characters, musical
                adventures, and… toys that double as great stocking stuffers! If
                you’re looking to leave little
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">January 3, 2024</small>
                <a
                  href="https://mybtoys.com/blog/gifts-for-kids-stocking-stuffers/"
                  class="btn btn-sm btn-outline-secondary"
                  >Read more</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




    <div class="container">
      <div class="row">
        <!-- Blog Post 1 -->
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img
              src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/toy7.jpeg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">10 holiday facts</h5>
              <p class="card-text">
                We at B. are always keen to discover something new, no matter
                the season! And given that festive celebrations are right around
                the corner,
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">January 1, 2024</small>
                <a
                  href="https://mybtoys.com/blog/10-fun-holiday-facts/"
                  class="btn btn-sm btn-outline-secondary"
                  >Read more</a
                >
              </div>
            </div>
          </div>
        </div>

        <!-- Blog Post 2 -->
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img
              src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/toy8.jpeg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Benefits of music toy</h5>
              <p class="card-text">
                Make some noise with musical toys from B. toys! Explore our
                creative and engaging line of musical toys for kids and toddlers
                in this handy gift guide
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">January 2, 2024</small>
                <a
                  href="https://mybtoys.com/blog/3-benefits-of-musical-toys-top-gift-ideas/"
                  class="btn btn-sm btn-outline-secondary"
                  >Read more</a
                >
              </div>
            </div>
          </div>
        </div>

        <!-- Blog Post 3 -->
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img
              src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/toy9.jpeg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Gifts for Kids: Stocking Stuffers</h5>
              <p class="card-text">
                s a magical place filled with friendly characters, musical
                adventures, and… toys that double as great stocking stuffers! If
                you’re looking to leave little
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">January 3, 2024</small>
                <a
                  href="https://mybtoys.com/blog/gifts-for-kids-stocking-stuffers/"
                  class="btn btn-sm btn-outline-secondary"
                  >Read more</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Add the Footer component here -->
    <Footer />

    <!-- Footer -->
    <footer
      class="text-center text-lg-start text-white"
      style="background-color: #45526e"
    >
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
          <!--Grid row-->
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">MAG Magazine</h6>
              <p>
               Welcome to MAG, where imagination meets exploration! Our online magazine is a vibrant hub designed exclusively for young minds to embark on thrilling adventures.
              </p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
              <p>
                <a class="text-white">Register</a>
              </p>
              <p>
                <a class="text-white">Login</a>
              </p>
              <p>
                <a class="text-white">Privacy Policy</a>
              </p>
              <p>
                <a class="text-white">Contact Us</a>
              </p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
              <p>
                <a class="text-white">Your Account</a>
              </p>

              <p>
                <a class="text-white">Help</a>
              </p>
            </div>

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
              <p><i class="fas fa-home mr-3"></i> Sri lanka, Colombo</p>
              <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
              <p><i class="fas fa-phone mr-3"></i> </p>
              <p><i class="fas fa-print mr-3"></i> </p>
            </div>
            <!-- Grid column -->
          </div>
          <!--Grid row-->
        </section>
        <!-- Section: Links -->

        <hr class="my-3" />

        <!-- Section: Copyright -->
        <section class="p-3 pt-0">
          <div class="row d-flex align-items-center">
            <!-- Grid column -->
            <div class="col-md-7 col-lg-8 text-center text-md-start">
              <!-- Copyright -->
              <div class="p-3">
                © 2024 Copyright:
                <a class="text-white" href="https://google.com/">MAG</a>
              </div>
              <!-- Copyright -->
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
              <!-- Facebook -->
              <a class="btn btn-outline-light btn-floating m-1" role="button"
                ><i class="fab fa-facebook-f"></i
              ></a>

              <!-- Twitter -->
              <a class="btn btn-outline-light btn-floating m-1" role="button"
                ><i class="fab fa-twitter"></i
              ></a>

              <!-- Google -->
              <a class="btn btn-outline-light btn-floating m-1" role="button"
                ><i class="fab fa-google"></i
              ></a>

              <!-- Instagram -->
              <a class="btn btn-outline-light btn-floating m-1" role="button"
                ><i class="fab fa-instagram"></i
              ></a>
            </div>
            <!-- Grid column -->
          </div>
        </section>
        <!-- Section: Copyright -->
      </div>
      <!-- Grid container -->
    </footer>
    <!-- Footer -->
  </div>
</template>


<script>
// Import the navigation bar component
import NavBar from "../components/Nav.vue";

import axios from "axios"; // Import Axios for making HTTP requests

export default {
  components: {
    NavBar, // Register the NavBar component
  },
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
    async uploaduImage() {
      try {
        // Create a FormData object to send the image file
        const formData = new FormData();
        formData.append("user_id", 1); // Assuming user ID is 1
        formData.append("image", this.selectedImage);

        // Make a POST request to upload the image
        const response = await axios.post(
          "http://127.0.0.1:8000/api/uimages",
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

<style>
.carousel-item {
  height: 50vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.product-carousel {
  background-color: #f8f9fa;
}

/* Adjustments for Bootstrap 5 */
.card {
  border: none;
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
  overflow: hidden;
  border-radius: 20px;
  min-height: 450px;
  box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.2);
}

.card img {
  border-radius: 10px 10px 0 0;
}

.card-body {
  padding: 1rem;
}

@media (max-width: 576px) {
  .flex-nowrap {
    flex-wrap: nowrap !important;
  }
}
body {
  background: #161616;
}
h1 {
  color: #fff;
}
.lead {
  color: #aaa;
}

.wrapper {
  margin: 10vh;
}

.card {
  border: none;
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
  overflow: hidden;
  border-radius: 20px;
  min-height: 450px;
  box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.2);

  @media (max-width: 768px) {
    min-height: 350px;
  }

  @media (max-width: 420px) {
    min-height: 300px;
  }

  &.card-has-bg {
    transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
    background-size: 120%;
    background-repeat: no-repeat;
    background-position: center center;
    &:before {
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background: inherit;
      -webkit-filter: grayscale(1);
      -moz-filter: grayscale(100%);
      -ms-filter: grayscale(100%);
      -o-filter: grayscale(100%);
      filter: grayscale(100%);
    }

    &:hover {
      transform: scale(0.98);
      box-shadow: 0 0 5px -2px rgba(0, 0, 0, 0.3);
      background-size: 130%;
      transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);

      .card-img-overlay {
        transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
        background: rgb(255, 186, 33);
        background: linear-gradient(
          0deg,
          rgba(255, 186, 33, 0.5) 0%,
          rgba(255, 186, 33, 1) 100%
        );
      }
    }
  }
  .card-footer {
    background: none;
    border-top: none;
    .media {
      img {
        border: solid 3px rgba(255, 255, 255, 0.3);
      }
    }
  }
  .card-title {
    font-weight: 800;
  }
  .card-meta {
    color: rgba(0, 0, 0, 0.3);
    text-transform: uppercase;
    font-weight: 500;
    letter-spacing: 2px;
  }
  .card-body {
    transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
  }
  &:hover {
    .card-body {
      margin-top: 30px;
      transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
    }
    cursor: pointer;
    transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
  }
  .card-img-overlay {
    transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
    background: rgb(255, 186, 33);
    background: linear-gradient(
      0deg,
      rgba(255, 186, 33, 0.3785889355742297) 0%,
      rgba(255, 186, 33, 1) 100%
    );
  }
}
@media (max-width: 767px) {
}
/* Add your styles here */

.header-blue {
  background: linear-gradient(135deg, #fe2929, #ffb3c5);
  background-color: #184e8e;
  padding-bottom: 80px;
  font-family: "Source Sans Pro", sans-serif;
}

@media (min-width: 768px) {
  .header-blue {
    padding-bottom: 120px;
  }
}

.header-blue .navbar {
  background: transparent;
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: #fff;
  border-radius: 0;
  box-shadow: none;
  border: none;
}

@media (min-width: 768px) {
  .header-blue .navbar {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }
}

.header-blue .navbar .navbar-brand {
  font-weight: bold;
  color: inherit;
}

.header-blue .navbar .navbar-brand:hover {
  color: #f0f0f0;
}

.header-blue .navbar .navbar-collapse {
  border-top: 1px solid rgba(255, 255, 255, 0.3);
  margin-top: 0.5rem;
}

@media (min-width: 768px) {
  .header-blue .navbar .navbar-collapse {
    border-color: transparent;
    margin: 0;
  }
}

.header-blue .navbar .navbar-collapse span .login {
  color: #fff;
  margin-right: 0.5rem;
  text-decoration: none;
}

.header-blue .navbar .navbar-collapse span .login:hover {
  color: #fff;
}

.header-blue .navbar .navbar-toggler {
  border-color: rgba(255, 255, 255, 0.3);
}

.header-blue .navbar .navbar-toggler:hover,
.header-blue .navbar-toggler:focus {
  background: none;
}

@media (min-width: 768px) {
  .header-blue .navbar-nav .nav-link {
    padding-left: 0.7rem;
    padding-right: 0.7rem;
  }
}

@media (min-width: 992px) {
  .header-blue .navbar-nav .nav-link {
    padding-left: 1.2rem;
    padding-right: 1.2rem;
  }
}

.header-blue .navbar.navbar-light .navbar-nav .nav-link {
  color: #fff;
}

.header-blue .navbar.navbar-light .navbar-nav .nav-link:focus,
.header-blue .navbar.navbar-light .navbar-nav .nav-link:hover {
  color: #fcfeff !important;
  background-color: transparent;
}

.header-blue .navbar .navbar-nav > li > .dropdown-menu {
  margin-top: -5px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  background-color: #fff;
  border-radius: 2px;
}

.header-blue .navbar .dropdown-menu .dropdown-item:focus,
.header-blue .navbar .dropdown-menu .dropdown-item {
  line-height: 2;
  color: #37434d;
}

.header-blue .navbar .dropdown-menu .dropdown-item:focus,
.header-blue .navbar .dropdown-menu .dropdown-item:hover {
  background: #ebeff1;
}

.header-blue .action-button,
.header-blue .action-button:not(.disabled):active {
  border: 1px solid rgb(255, 255, 255);
  border-radius: 40px;
  color: #fff;
  box-shadow: none;
  text-shadow: none;
  padding: 0.3rem 0.8rem;
  background: transparent;
  transition: background-color 0.25s;
  outline: none;
}

.header-blue .action-button:hover {
  color: #fff;
}

.header-blue .navbar .form-inline label {
  color: #d9d9d9;
}

.header-blue .navbar .form-inline .search-field {
  display: inline-block;
  width: 80%;
  background: none;
  border: none;
  border-bottom: 1px solid transparent;
  border-radius: 0;
  color: #fff;
  box-shadow: none;
  color: inherit;
  transition: border-bottom-color 0.3s;
}

.header-blue .navbar .form-inline .search-field:focus {
  border-bottom: 1px solid #ccc;
}

.header-blue .hero {
  margin-top: 20px;
  text-align: center;
}

@media (min-width: 768px) {
  .header-blue .hero {
    margin-top: 60px;
    text-align: left;
  }
}

.header-blue .hero h1 {
  color: #fff;
  font-size: 40px;
  margin-top: 0;
  margin-bottom: 15px;
  font-weight: 300;
  line-height: 1.4;
}

@media (min-width: 992px) {
  .header-blue .hero h1 {
    margin-top: 190px;
    margin-bottom: 24px;
    line-height: 1.2;
  }
}

.header-blue .hero p {
  color: rgba(255, 255, 255, 0.8);
  font-size: 20px;
  margin-bottom: 30px;
  font-weight: 300;
}

.header-blue .phone-holder {
  text-align: right;
}

.header-blue div.iphone-mockup {
  position: relative;
  max-width: 300px;
  margin-top: 172px;
  display: inline-block;
}

.header-blue .iphone-mockup img.device {
  width: 400px;
  height: 100%;
}

.header-blue .iphone-mockup .screen {
  position: absolute;
  width: 88%;
  height: 77%;
  top: 12%;
  border-radius: 2px;
  left: 6%;
  border: 1px solid #444;
  background-color: #aaa;
  overflow: hidden;
  background: url(../../assets/img/screen-content-iphone-6.jpg);
  background-size: cover;
  background-position: center;
}

.header-blue .iphone-mockup .screen:before {
  content: "";
  background-color: #fff;
  position: absolute;
  width: 70%;
  height: 140%;
  top: -12%;
  right: -60%;
  transform: rotate(-19deg);
  opacity: 0.2;
}
</style>
