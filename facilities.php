<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taj Hotel - Facilities</title>
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

    .h-line {
      width: 150px;
      margin: 0 auto;
      height: 1.7px;

    }

    .pop:hover {
      border-top-color: greenyellow !important;
      transform: scale(1.03);
      transition: all 0.3s;
    }
  </style>

</head>

<body class="bg-light">


  <?php include('./inc/header.php'); ?>





  <div class="my-5 px-5">
    <h2 class="fw-bold text-center">Our Facilities</h2>
    <div class="h-line bg-dark"></div>
    <P class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Ut, laborum ratione velit repudiandae <br> alias debitis autem fugiat deserunt et quae?</P>
  </div>


  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-dark border-4 pop">
          <div class="d-flex align-itmes-center mb-2">
            <img src="./carousel/wifi.svg" width="50px">
            <h5 class="m-0 ms-3">Wifi</h5>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, dolorum!</p>
        </div>
      </div>


      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-dark border-4 pop">
          <div class="d-flex align-itmes-center mb-2">
            <img src="./carousel/wifi.svg" width="50px">
            <h5 class="m-0 ms-3">Wifi</h5>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, dolorum!</p>
        </div>
      </div>



      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-dark border-4 pop">
          <div class="d-flex align-itmes-center mb-2">
            <img src="./carousel/wifi.svg" width="50px">
            <h5 class="m-0 ms-3">Wifi</h5>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, dolorum!</p>
        </div>
      </div>



      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-dark border-4 pop">
          <div class="d-flex align-itmes-center mb-2">
            <img src="./carousel/wifi.svg" width="50px">
            <h5 class="m-0 ms-3">Wifi</h5>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, dolorum!</p>
        </div>
      </div>


      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-dark border-4 pop">
          <div class="d-flex align-itmes-center mb-2">
            <img src="./carousel/wifi.svg" width="50px">
            <h5 class="m-0 ms-3">Wifi</h5>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, dolorum!</p>
        </div>
      </div>


      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-dark border-4 pop">
          <div class="d-flex align-itmes-center mb-2">
            <img src="./carousel/wifi.svg" width="50px">
            <h5 class="m-0 ms-3">Wifi</h5>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, dolorum!</p>
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