<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Tj Hotel - About</title>
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

    .box {
      border-top-color: green !important;
    }
  </style>

</head>

<body class="bg-light">


  <?php include('./inc/header.php'); ?>



  <div class="my-5 px-5">
    <h2 class="fw-bold text-center">About Us</h2>
    <div class="h-line bg-dark"></div>
    <P class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Ut, laborum ratione velit repudiandae <br> alias debitis autem fugiat deserunt et quae?</P>
  </div>


  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-2 order-lg-1 order-md-1">
        <h3>lorem ipsum dolor</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non eaque sed dolore rerum reiciendis excepturi cupiditate repellendus itaque dolores eum?</p>
      </div>

      <div class="col-lg-5 col-md-5 order-1 order-lg-2 order-md-2">
        <img src="./carousel/srk.jpg" class="w-100 rounded ">
      </div>

    </div>
  </div>



  <div class="container mt-5">
    <div class="row">

      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white shadow p-4 border-top border-4 text-center box">
          <img src="./carousel/hotel.svg" width="40px">
          <h4 class="mt-3">100+ Rooms</h4>
        </div>

      </div>


      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white shadow p-4 border-top border-4 text-center box">
          <img src="./carousel/hotel.svg" width="40px">
          <h4 class="mt-3">200+ Customers</h4>
        </div>
      </div>


      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white shadow p-4 border-top border-4 text-center box">
          <img src="./carousel/star.svg" width="40px">
          <h4 class="mt-3 ">150+ Ratings</h4>
        </div>
      </div>


      <div class="col-lg-3 col-md-6 mb-4 px-4 ">
        <div class="bg-white shadow p-4 border-top border-4 text-center box">
          <img src="./carousel/hotel.svg" width="40px">
          <h4 class="mt-3">200+ Staffs</h4>
        </div>
      </div>



    </div>
  </div>


  <h3 class="fw-bold text-center mb-3 my-5">Management Team</h3>

  <div class="container">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="./carousel/sal.png" width='200px'>
          <h5 class="mt-2">Random Name</h5>
        </div>




        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="./carousel/sal.png" width='200px'>
          <h5 class="mt-2">Random Name</h5>
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="./carousel/sal.png" width='200px'>
          <h5 class="mt-2">Random Name</h5>
        </div>


        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="./carousel/sal.png" width='200px'>
          <h5 class="mt-2">Random Name</h5>
        </div>


        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="./carousel/sal.png" width='200px'>
          <h5 class="mt-2">Random Name</h5>
        </div>


        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="./carousel/sal.png" width='200px'>
          <h5 class="mt-2">Random Name</h5>
        </div>


        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="./carousel/sal.png" width='200px'>
          <h5 class="mt-2">Random Name</h5>
        </div>


        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="./carousel/sal.png" width='200px'>
          <h5 class="mt-2">Random Name</h5>
        </div>


        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="./carousel/sal.png" width='200px'>
          <h5 class="mt-2">Random Name</h5>
        </div>


        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="./carousel/sal.png" width='200px'>
          <h5 class="mt-2">Random Name</h5>
        </div>


        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="./carousel/sal.png" width='200px'>
          <h5 class="mt-2">Random Name</h5>
        </div>














      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <!-- Footer -->


  <?php include('./inc/footer.php'); ?>











  about swiper pagination

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 40,
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
          slidesPerView: 4,
        },
      }
    });
  </script>

</body>

</html>