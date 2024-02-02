<template>
  <div>
    <!-- Include the navigation bar component -->
    <NavBar />
  


<header>
 <div>
        <div class="header-blue">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
            </nav>
            <div class="container hero">
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                        <h1>Online Magazine</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br></p>
                        <button
                            class="btn btn-light btn-lg action-button" type="button">Learn More<i class="fa fa-long-arrow-right ml-2"></i></button>
                    </div>
                    <div class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                        <div class="iphone-mockup">
						<img class="device" src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/buny.png">
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
          <img src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/forp1.png" class="card-img-top" alt="Book Title" width="400" height="600">
          <!-- <img src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/MAG.png" alt="Icon" width="50" height="50"> -->
        </div>
      </div>
    </div>
    
    <!-- Right side text content -->
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Download, Color, and Upload</h5>
          <p class="card-text">Here's a fun activity for you! Follow these steps:</p>
          <ol>
            <li>Download the image by clicking the "Download Image" button below.</li>
            <li>Color the image creatively using your favorite colors, markers, or crayons.</li>
            <li>Upload your colored version of the image using the "Upload Image" button.</li>
          </ol>
          <p class="card-text">Each week, we'll select a winner from the uploaded images!</p>
          <a href="/path/to/downloadable/image.jpg" download="coloring_image.jpg" class="btn btn-primary">Download Image</a>
          <input type="file" accept="image/*" id="imageUpload" class="form-control mt-3">
          <button onclick="uploadImage()" class="btn btn-success mt-3">Upload Image</button>
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
              <img src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/book1.jpeg" class="card-img-top" alt="Book Title"  height="300">
              <div class="card-body">
                <p class="card-text">Book Title</p>
                <h4 class="card-text">Book Title</h4>
              </div>
            </div>
          </div>
          <!-- Repeat the following block for each additional card -->
          <!-- Card 2 -->
          <div class="col">
            <div class="card">
              <img src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/book1.jpeg" class="card-img-top" alt="Book Title" height="300">
              <div class="card-body">
                <p class="card-text">Book Title</p>
              </div>
            </div>
          </div>
          <!-- Card 3 -->
          <div class="col">
            <div class="card">
              <img src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/book1.jpeg" class="card-img-top" alt="Book Title" height="300">
              <div class="card-body">
                <p class="card-text">Book Title</p>
              </div>
            </div>
          </div>

        <!-- Card 4 -->
          <div class="col">
            <div class="card">
              <img src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/book1.jpeg" class="card-img-top" alt="Book Title" height="300">
              <div class="card-body">
                <p class="card-text">Book Title</p>
              </div>
            </div>
          </div>
          <!-- Card 5 -->
          <div class="col">
            <div class="card">
             <img src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/book1.jpeg" class="card-img-top" alt="Book Title" height="300">
              <div class="card-body">
                <p class="card-text">Book Title</p>
              </div>
            </div>
          </div>
     
         
          <!-- Add more cards as needed -->
        </div>
      </div>
    </section>






    <!-- count dowc -->




    <!-- card start -->

    <section class="wrapper">
      <div class="container">
        <div class="row">
          <div class="col text-center mb-3">
            <h1 class="lead">
              This Week Top Winners
            </h1>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div
              class="card text-dark card-has-bg click-col"
              style="
                background-image: url('https://source.unsplash.com/600x900/?tech,street');
              "
            >
              <img
                class="card-img d-none"
                src="https://source.unsplash.com/600x900/?tech,street"
                alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?"
              />
              <div class="card-img-overlay d-flex flex-column">
                <div class="card-body">
                  <small class="card-meta mb-2">Winner</small>
                  <h4 class="card-title mt-0">
                    <a class="text-dark" herf="https://creativemanner.com"
                      >hello sample test</a
                    >
                  </h4>
                  <small><i class="far fa-clock"></i> October 15, 2024</small>
                </div>
                <div class="card-footer">
                  <div class="media">
                    <img
                      class="mr-3 rounded-circle"
                      src="https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80"
                      alt="Generic placeholder image"
                      style="max-width: 50px"
                    />
                    <div class="media-body">
                      <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
                      <small>From UK</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div
              class="card text-dark card-has-bg click-col"
              style="
                background-image: url('https://source.unsplash.com/600x900/?tree,nature');
              "
            >
              <img
                class="card-img d-none"
                src="https://source.unsplash.com/600x900/?tree,nature"
                alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?"
              />
              <div class="card-img-overlay d-flex flex-column">
                <div class="card-body">
                  <small class="card-meta mb-2">Winner</small>
                  <h4 class="card-title mt-0">
                    <a class="text-dark" herf="https://creativemanner.com"
                      >hello sample test</a
                    >
                  </h4>
                  <small><i class="far fa-clock"></i> October 15, 2024</small>
                </div>
                <div class="card-footer">
                  <div class="media">
                    <img
                      class="mr-3 rounded-circle"
                      src="https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80"
                      alt="Generic placeholder image"
                      style="max-width: 50px"
                    />
                    <div class="media-body">
                      <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
                      <small>From UK</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div
              class="card text-dark card-has-bg click-col"
              style="
                background-image: url('https://source.unsplash.com/600x900/?computer,design');
              "
            >
              <img
                class="card-img d-none"
                src="https://source.unsplash.com/600x900/?computer,design"
                alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?"
              />
              <div class="card-img-overlay d-flex flex-column">
                <div class="card-body">
                  <small class="card-meta mb-2">Winner</small>
                  <h4 class="card-title mt-0">
                    <a class="text-dark" herf="https://creativemanner.com"
                      >hello sample test</a
                    >
                  </h4>
                  <small><i class="far fa-clock"></i> October 15, 2024</small>
                </div>
                <div class="card-footer">
                  <div class="media">
                    <img
                      class="mr-3 rounded-circle"
                      src="https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80"
                      alt="Generic placeholder image"
                      style="max-width: 50px"
                    />
                    <div class="media-body">
                      <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
                      <small>From UK</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div
              class="card text-dark card-has-bg click-col"
              style="
                background-image: url('https://source.unsplash.com/600x900/?tech,street');
              "
            >
              <img
                class="card-img d-none"
                src="https://source.unsplash.com/600x900/?tech,street"
                alt=" Lorem Ipsum Sit Amet Consectetur dipisi?"
              />
              <div class="card-img-overlay d-flex flex-column">
                <div class="card-body">
                  <small class="card-meta mb-2">Winner</small>
                  <h4 class="card-title mt-0">
                    <a class="text-dark" herf="https://creativemanner.com"
                      >hello sample test</a
                    >
                  </h4>
                  <small><i class="far fa-clock"></i> October 15, 2024</small>
                </div>
                <div class="card-footer">
                  <div class="media">
                    <img
                      class="mr-3 rounded-circle"
                      src="https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80"
                      alt="Generic placeholder image"
                      style="max-width: 50px"
                    />
                    <div class="media-body">
                      <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
                      <small>From UK</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div
              class="card text-dark card-has-bg click-col"
              style="
                background-image: url('https://source.unsplash.com/600x900/?tree,nature');
              "
            >
              <img
                class="card-img d-none"
                src="https://source.unsplash.com/600x900/?tree,nature"
                alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?"
              />
              <div class="card-img-overlay d-flex flex-column">
                <div class="card-body">
                  <small class="card-meta mb-2">Winner</small>
                  <h4 class="card-title mt-0">
                    <a class="text-dark" herf="https://creativemanner.com"
                      >hello sample test</a
                    >
                  </h4>
                  <small><i class="far fa-clock"></i> October 15, 2024</small>
                </div>
                <div class="card-footer">
                  <div class="media">
                    <img
                      class="mr-3 rounded-circle"
                      src="https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80"
                      alt="Generic placeholder image"
                      style="max-width: 50px"
                    />
                    <div class="media-body">
                      <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
                      <small>From UK</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div
              class="card text-dark card-has-bg click-col"
              style="
                background-image: url('https://source.unsplash.com/600x900/?computer,design');
              "
            >
              <img
                class="card-img d-none"
                src="https://source.unsplash.com/600x900/?computer,design"
                alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?"
              />
              <div class="card-img-overlay d-flex flex-column">
                <div class="card-body">
                  <small class="card-meta mb-2">Winner</small>
                  <h4 class="card-title mt-0">
                    <a class="text-dark" herf="https://creativemanner.com"
                      >hello sample test</a
                    >
                  </h4>
                  <small><i class="far fa-clock"></i> October 15, 2024</small>
                </div>
                <div class="card-footer">
                  <div class="media">
                    <img
                      class="mr-3 rounded-circle"
                      src="https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80"
                      alt="Generic placeholder image"
                      style="max-width: 50px"
                    />
                    <div class="media-body">
                      <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
                      <small>From UK</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- //card end -->

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
            <h6 class="text-uppercase mb-4 font-weight-bold">
              Company name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer
              content. Lorem ipsum dolor sit amet, consectetur adipisicing
              elit.
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
            <p>
              <a class="text-white">MDBootstrap</a>
            </p>
            <p>
              <a class="text-white">MDWordPress</a>
            </p>
            <p>
              <a class="text-white">BrandFlow</a>
            </p>
            <p>
              <a class="text-white">Bootstrap Angular</a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              Useful links
            </h6>
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
            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
            <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-3">

      <!-- Section: Copyright -->
      <section class="p-3 pt-0">
        <div class="row d-flex align-items-center">
          <!-- Grid column -->
          <div class="col-md-7 col-lg-8 text-center text-md-start">
            <!-- Copyright -->
            <div class="p-3">
              © 2024 Copyright:
              <a class="text-white" href="https://google.com/"
                 >MAG</a
                >
            </div>
            <!-- Copyright -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
            <!-- Facebook -->
            <a
               class="btn btn-outline-light btn-floating m-1"
            
               role="button"
               ><i class="fab fa-facebook-f"></i
              ></a>

            <!-- Twitter -->
            <a
               class="btn btn-outline-light btn-floating m-1"
              
               role="button"
               ><i class="fab fa-twitter"></i
              ></a>

            <!-- Google -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               
               role="button"
               ><i class="fab fa-google"></i
              ></a>

            <!-- Instagram -->
            <a
               class="btn btn-outline-light btn-floating m-1"
              
               role="button"
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

export default {
  components: {
    NavBar, // Register the NavBar component
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
  font-family: 'Source Sans Pro', sans-serif;
}

@media (min-width:768px) {
  .header-blue {
    padding-bottom: 120px;
  }
}

.header-blue .navbar {
  background: transparent;
  padding-top: .75rem;
  padding-bottom: .75rem;
  color: #fff;
  border-radius: 0;
  box-shadow: none;
  border: none;
}

@media (min-width:768px) {
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
  border-top: 1px solid rgba(255,255,255,0.3);
  margin-top: .5rem;
}

@media (min-width:768px) {
  .header-blue .navbar .navbar-collapse {
    border-color: transparent;
    margin: 0;
  }
}

.header-blue .navbar .navbar-collapse span .login {
  color: #fff;
  margin-right: .5rem;
  text-decoration: none;
}

.header-blue .navbar .navbar-collapse span .login:hover {
  color: #fff;
}

.header-blue .navbar .navbar-toggler {
  border-color: rgba(255,255,255,0.3);
}

.header-blue .navbar .navbar-toggler:hover, .header-blue .navbar-toggler:focus {
  background: none;
}

@media (min-width: 768px) {
  .header-blue .navbar-nav .nav-link {
    padding-left: .7rem;
    padding-right: .7rem;
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

.header-blue .navbar.navbar-light .navbar-nav .nav-link:focus, .header-blue .navbar.navbar-light .navbar-nav .nav-link:hover {
  color: #fcfeff !important;
  background-color: transparent;
}

.header-blue .navbar .navbar-nav > li > .dropdown-menu {
  margin-top: -5px;
  box-shadow: 0 4px 8px rgba(0,0,0,.1);
  background-color: #fff;
  border-radius: 2px;
}

.header-blue .navbar .dropdown-menu .dropdown-item:focus, .header-blue .navbar .dropdown-menu .dropdown-item {
  line-height: 2;
  color: #37434d;
}

.header-blue .navbar .dropdown-menu .dropdown-item:focus, .header-blue .navbar .dropdown-menu .dropdown-item:hover {
  background: #ebeff1;
}

.header-blue .action-button, .header-blue .action-button:not(.disabled):active {
  border: 1px solid rgb(255,255,255);
  border-radius: 40px;
  color: #fff;
  box-shadow: none;
  text-shadow: none;
  padding: .3rem .8rem;
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

@media (min-width:768px) {
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

@media (min-width:992px) {
  .header-blue .hero h1 {
    margin-top: 190px;
    margin-bottom: 24px;
    line-height: 1.2;
  }
}

.header-blue .hero p {
  color: rgba(255,255,255,0.8);
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
  content: '';
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
