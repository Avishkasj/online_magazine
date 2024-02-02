<template>
  <div>
    <!-- Include the navigation bar component -->
    <NavBar />
  


<header>

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
        <div class="carousel-caption">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
        <div class="carousel-caption">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
        <div class="carousel-caption">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
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
        <h2 class="text-center">Featured Books</h2>
        <div class="row flex-nowrap overflow-auto">
          <!-- Add your carousel items here -->
          <!-- Card 1 -->
          <div class="col">
            <div class="card">
              <img src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/book1.jpeg" class="card-img-top" alt="Book Title">
              <div class="card-body">
                <p class="card-text">Book Title</p>
              </div>
            </div>
          </div>
          <!-- Repeat the following block for each additional card -->
          <!-- Card 2 -->
          <div class="col">
            <div class="card">
              <img src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/book1.jpeg" class="card-img-top" alt="Book Title">
              <div class="card-body">
                <p class="card-text">Book Title</p>
              </div>
            </div>
          </div>
          <!-- Card 3 -->
          <div class="col">
            <div class="card">
              <img src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/book1.jpeg" class="card-img-top" alt="Book Title">
              <div class="card-body">
                <p class="card-text">Book Title</p>
              </div>
            </div>
          </div>

        <!-- Card 4 -->
          <div class="col">
            <div class="card">
              <img src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/book1.jpeg" class="card-img-top" alt="Book Title">
              <div class="card-body">
                <p class="card-text">Book Title</p>
              </div>
            </div>
          </div>
          <!-- Card 5 -->
          <div class="col">
            <div class="card">
             <img src="/Users/avishkasupun/Documents/online_magazine/front_end/src/assets/book1.jpeg" class="card-img-top" alt="Book Title">
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
            <h1 class="display-4 font-weight-bolder">
              Bootstrap 4 Cards With Background Image
            </h1>
            <h2 class="lead">
              Tisk Week Top 6 Winners
            </h2>
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
                  <small class="card-meta mb-2">Thought Leadership</small>
                  <h4 class="card-title mt-0">
                    <a class="text-dark" herf="https://creativemanner.com"
                      >Web Developmet Lorem Ipsum Sit Amet Consectetur
                      dipisi?</a
                    >
                  </h4>
                  <small><i class="far fa-clock"></i> October 15, 2020</small>
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
                  <small class="card-meta mb-2">Thought Leadership</small>
                  <h4 class="card-title mt-0">
                    <a class="text-dark" herf="https://creativemanner.com"
                      >Creative Manner Lorem Ipsum Sit Amet Consectetur
                      dipisi?</a
                    >
                  </h4>
                  <small><i class="far fa-clock"></i> October 15, 2020</small>
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
                  <small class="card-meta mb-2">Thought Leadership</small>
                  <h4 class="card-title mt-0">
                    <a class="text-dark" herf="https://creativemanner.com"
                      >Design Studio Lorem Ipsum Sit Amet Consectetur dipisi?</a
                    >
                  </h4>
                  <small><i class="far fa-clock"></i> October 15, 2020</small>
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
                  <small class="card-meta mb-2">Thought Leadership</small>
                  <h4 class="card-title mt-0">
                    <a class="text-dark" herf="https://creativemanner.com"
                      >UI/UX Design Lorem Ipsum Sit Amet Consectetur dipisi?</a
                    >
                  </h4>
                  <small><i class="far fa-clock"></i> October 15, 2020</small>
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
                  <small class="card-meta mb-2">Thought Leadership</small>
                  <h4 class="card-title mt-0">
                    <a class="text-dark" herf="https://creativemanner.com"
                      >Creative Manner Design Lorem Ipsum Sit Amet Consectetur
                      dipisi?</a
                    >
                  </h4>
                  <small><i class="far fa-clock"></i> October 15, 2020</small>
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
                  <small class="card-meta mb-2">Thought Leadership</small>
                  <h4 class="card-title mt-0">
                    <a class="text-dark" herf="https://creativemanner.com"
                      >Creative Manner Design Lorem Ipsum Sit Amet Consectetur
                      dipisi?</a
                    >
                  </h4>
                  <small><i class="far fa-clock"></i> October 15, 2020</small>
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
              <a class="text-white">Become an Affiliate</a>
            </p>
            <p>
              <a class="text-white">Shipping Rates</a>
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
  border-radius: 20px 20px 0 0;
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
  /* Created with https://www.css-gradient.com */
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
</style>
