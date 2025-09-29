<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taj Hotel - Home</title>
  <?php include('./inc/links.php'); ?>

  <style>
    /* html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: light;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #fff;
      margin: 0;
      padding: 0;
    }

    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
    } */

    .custom-bg {
      background-color: #2ec1ac;
    }

    .custom-bg:hover {
      background-color: #279e8c;
    }

    .availability-form {
      margin-top: -50px;
      position: relative;
      z-index: 1;
    }

    @media screen and (max-width:575px) {
      .availability-form {
        margin-top: 25px;
        padding: 0px 35px;
      }
    }
  </style>

</head>

<body class="bg-light">


  <?php include('./inc/header.php'); ?>



  <!-- Carousel design -->


  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <img src="carousel/1.webp" class="w-100 d-block" />
        </div>

        <div class="swiper-slide">
          <img src="carousel/3.jpg" class="w-100 d-block" />
        </div>

        <div class="swiper-slide">
          <img src="carousel/1.webp" class="w-100 d-block" />
        </div>


        <div class="swiper-slide">
          <img src="carousel/1.webp" class="w-100 d-block" />
        </div>


      </div>

    </div>
  </div>



  <!-- check Booking Availbility form -->

  <div class="container availability-form">

    <div class="row">
      <div class="col-lg-12 bg-white shadow  p-4 rounded">
        <h5 class="fw-bold">Check Availabilty form</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: bold;">Check-in</label>
              <input type="date" class="form-control shadow-none">
            </div>

            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: bold;">Check-out</label>
              <input type="date" class="form-control shadow-none">
            </div>

            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: bold;">Adult</label>
              <select class="form-select shadow-none">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>

            <div class="col-lg-2 mb-3">
              <label class="form-label" style="font-weight: bold;">Children</label>
              <select class="form-select shadow-none">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>


            <div class="col-lg-1 mb-3">
              <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
            </div>



          </div>


        </form>
      </div>
    </div>


  </div>





  <!-- Our Rooms -->

  <h2 class="text-center mt-4 pt-4 mb-4 fw-bold">Our Rooms</h2>

  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
          <img src="carousel/1.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Simple Rooms</h5>
            <h6 class="mb-4">200 per night</h6>

            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill text-wrap bg-light text-dark">2 Rooms</span>
              <span class="badge rounded-pill text-wrap bg-light text-dark">1 Bathroom</span>
              <span class="badge rounded-pill text-wrap bg-light text-dark">1 Balcony</span>
              <span class="badge rounded-pill text-wrap bg-light text-dark">3 Sofa</span>
            </div>

            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill text-wrap bg-light text-dark">Wifi</span>
              <span class="badge rounded-pill text-wrap bg-light text-dark">Television</span>
              <span class="badge rounded-pill text-wrap bg-light text-dark">AC</span>
              <span class="badge rounded-pill text-wrap bg-light text-dark">Room Heater</span>
            </div>



            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill text-wrap bg-light text-dark">5 Adults</span>
              <span class="badge rounded-pill text-wrap bg-light text-dark">4 Children</span>
            </div>



            <div class="rating mb-4">
              <h6 class="mb-1">Ratings</h6>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>


            <div class="d-flex justify-content-evenly">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
          <img src="carousel/1.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Simple Rooms</h5>
            <h6 class="mb-4">200 per night</h6>

            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill text-wrap bg-light text-dark">2 Rooms</span>
              <span class="badge rounded-pill text-wrap bg-light text-dark">1 Bathroom</span>
              <span class="badge rounded-pill text-wrap bg-light text-dark">1 Balcony</span>
              <span class="badge rounded-pill text-wrap bg-light text-dark">3 Sofa</span>
            </div>

            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill text-wrap bg-light text-dark">Wifi</span>
              <span class="badge rounded-pill text-wrap bg-light text-dark">Television</span>
              <span class="badge rounded-pill text-wrap bg-light text-dark">AC</span>
              <span class="badge rounded-pill text-wrap bg-light text-dark">Room Heater</span>
            </div>



            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill text-wrap bg-light text-dark">5 Adults</span>
              <span class="badge rounded-pill text-wrap bg-light text-dark">4 Children</span>
            </div>



            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>


            <div class="d-flex justify-content-evenly">
              <a href="" class="btn btn-sm custom-bg text-white shadow-none">Book Now</a>
              <a href="" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>

          </div>
        </div>
      </div>


      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
          <img src="carousel/1.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Simple Rooms</h5>
            <h6 class="mb-4">200 per night</h6>

            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill text-wrap bg-light text-dark">2 Rooms</span>
              <span class="badge rounded-pill text-wrap bg-light text-dark">1 Bathroom</span>
              <span class="badge rounded-pill text-wrap bg-light text-dark">1 Balcony</span>
              <span class="badge rounded-pill text-wrap bg-light text-dark">3 Sofa</span>
            </div>

            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill text-wrap bg-light text-dark">Wifi</span>
              <span class="badge rounded-pill text-wrap bg-light text-dark">Television</span>
              <span class="badge rounded-pill text-wrap bg-light text-dark">AC</span>
              <span class="badge rounded-pill text-wrap bg-light text-dark">Room Heater</span>
            </div>


            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill text-wrap bg-light text-dark">5 Adults</span>
              <span class="badge rounded-pill text-wrap bg-light text-dark">4 Children</span>
            </div>



            <div class="rating mb-4">
              <h6 class="mb-1">Ratings</h6>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>

            </div>

            <div class="d-flex justify-content-evenly">
              <a href="" class="btn btn-sm custom-bg shadow-noen">Book Now</a>
              <a href="" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>


          </div>
        </div>
      </div>


      <div class="col-lg-12 text-center">
        <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms</a>
      </div>
    </div>
  </div>



  <!-- wifi FACILITIES -->



  <h2 class="fw-bold text-center mt-4 pt-4 mb-4 h-font">Our Facilities</h2>

  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">

      <div class="col-lg-2 col-md-2 text-center bg-white shadow rounded py-4 my-3">
        <img src="./carousel/wifi.svg" width="50px">
        <h5>Wifi</h5>
      </div>


      <div class="col-lg-2 col-md-2 text-center bg-white shadow rounded py-4 my-3">
        <img src="./carousel/wifi.svg" width="50px">
        <h5>Wifi</h5>
      </div>


      <div class="col-lg-2 col-md-2 text-center bg-white shadow rounded py-4 my-3">
        <img src="./carousel/star.svg" width="50px">
        <h5 class="mt-2">Star</h5>
      </div>



      <div class="col-lg-2 col-md-2 text-center bg-white shadow rounded py-4 my-3">
        <img src="./carousel/wifi.svg" width="50px">
        <h5>Wifi</h5>
      </div>


      <div class="col-lg-2 col-md-2 text-center bg-white shadow rounded py-4 my-3">
        <img src="./carousel/wifi.svg" width="50px">
        <h5>Wifi</h5>
      </div>

      <div class="col-lg-12 text-center my-3 fw-bold">
        <a href="" class="btn btn-sm btn-outline-dark text-decoration-none">More Facilities</a>
      </div>


    </div>
  </div>



  <!-- Testinmonials -->

  <h5 class="text-center mt-5 mb-4 pt-4 fw-bold h-font">TESTIMONIALS</h5>


  <div class="container">

    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper mb-5">

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="./carousel/star.svg" width="30px" />
            <h6>Random User2</h6>
          </div>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum, debitis.</p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="profile d-flex align-items-center mb-3">
            <img src="./carousel/star.svg" width="30px" />
            <h6>Random User2</h6>
          </div>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum, debitis.</p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="profile d-flex align-items-center mb-3">
            <img src="./carousel/star.svg" width="30px" />
            <h6>Random User2</h6>
          </div>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum, debitis.</p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>



  </div>



  <!-- Reach Us  -->

  <h5 class="mt-5 pt-4 mb-4 fw-bold h-font text-center">Reach Us</h5>


  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7143.54157093276!2d84.2972412399885!3d26.463116512390332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399307b090284f8d%3A0x8f0c8f8630671b4d!2sBirwat%20Ghuran%2C%20Bihar%20841425!5e0!3m2!1sen!2sin!4v1750677181891!5m2!1sen!2sin" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5 class="fw-bold h-font">Call Us</h5>
          <a href="tel: +919199712264" class="d-inline-block mb-2 text-decoration-none text-dark "><i class="bi bi-telephone-fill"></i> +919199712264</a>
        </div>

        <div class="bg-white p-4 rounded mb-4">
          <h5 class="fw-bold h-font">Follow Us</h5>
          <a href="" class="d-inline-block mb-3">
            <span class="badge text-bg-light fs-6">
              <i class="bi bi-twitter me-2"></i>Twitter</span>
          </a>

          <br>
          <a href="" class="d-inline-block mb-3">
            <span class="badge text-bg-light fs-6"><i class="bi bi-facebook me-2">
              </i> Facebook</span>
          </a>

          <br>
          <a href="" class="d-inline-block"><span class="badge text-bg-light fs-6"><i class="bi bi-instagram me-2"></i> Instagram</span></a>

        </div>



      </div>
    </div>
  </div>



  <!-- Footer -->


  <?php include('./inc/footer.php'); ?>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 1000,
        disableOnInteraction: false
      }
    });
  </script>

  <!-- Testimonials -->

  <script>
    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: 3,
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 2,
        },
      }
    });
  </script>

</body>

</html>