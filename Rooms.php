<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taj Hotel - Contact</title>
  <style>
    .h-line {
      width: 150px;
      margin: 0 auto;
      height: 1.7px;

    }
  </style>
  <?php include('./inc/links.php'); ?>


</head>

<body class="bg-light">


  <?php include('./inc/header.php'); ?>


  <div class="my-5 px-5">
    <h2 class="fw-bold text-center">Our Rooms</h2>
    <div class="h-line bg-dark"></div>
    <P class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Ut, laborum ratione velit repudiandae <br> alias debitis autem fugiat deserunt et quae?</P>
  </div>







  <div class="container">
    <div class="row">

      <!-- filter section  -->

      <div class="col-lg-3 col-md-12 mb-4">

        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow rounded">

          <div class="container-fluid flex-lg-column align-items-stretch>
            
          <h4 class=" mt-2">Filters</h4>

            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterdropdown" aria-controls="filterdropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse flex-column" id="filterdropdown">

              <div class="mb-3 shadow rounded bg-light p-3 border">
                <h5 class="fs-5 fw-bold">Check Availability</h5>

                <div class="mb-3">
                  <label class="form-label">Check-in</label>
                  <input type="date" class="form-control shadow-none">
                </div>

                <div class="mb-3">
                  <label class="form-label">Check-out</label>
                  <input type="date" class="form-control shadow-none">
                </div>
              </div>

              <div class="mb-2 shadow rounded bg-light p-5 border">
                <h5 class="fs-5 fw-bold mb-3">Facilities</h5>

                <div class="mb-3">
                  <input class="form-check-input" type="checkbox" id="f1">
                  <label class="form-check-label" for="f1">
                    Facility One
                  </label>
                </div>

                <div class="mb-3">
                  <input class="form-check-input" type="checkbox" id="f2">
                  <label class="form-check-label" for="f2">
                    Facility Two
                  </label>
                </div>

                <div class="mb-3">
                  <input class="form-check-input" type="checkbox" id="f3">
                  <label class="form-check-label" for="f3">
                    Facility Three
                  </label>
                </div>

              </div>




              <div class="mb-2 shadow rounded bg-light p-5 border">
                <h5 class="fs-5 fw-bold mb-3">Guests</h5>

                <div class="d-flex">
                  <div class="me-3">
                    <label class="form-label">Adults</label>
                    <input type="text" class="form-control shadow-none">
                  </div>
                  <div>
                    <label class="form-label">Children</label>
                    <input type="number" class="form-control shadow-none">
                  </div>
                </div>

              </div>

            </div>
          </div>
        </nav>


      </div>




      <div class="col-lg-9 col-md-12 px-4">

        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">

            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="./carousel/1.webp" class="img-fluid rounded">
            </div>

            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-2">Simple Room Name</h5>

              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill text-wrap bg-light text-dark">2 Rooms</span>
                <span class="badge rounded-pill text-wrap bg-light text-dark">1 Bathroom</span>
                <span class="badge rounded-pill text-wrap bg-light text-dark">1 Balcony</span>
                <span class="badge rounded-pill text-wrap bg-light text-dark">3 Sofa</span>
              </div>

              <div class="facilities mb-3">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill text-wrap bg-light text-dark">Wifi</span>
                <span class="badge rounded-pill text-wrap bg-light text-dark">Television</span>
                <span class="badge rounded-pill text-wrap bg-light text-dark">AC</span>
                <span class="badge rounded-pill text-wrap bg-light text-dark">Room Heater</span>
              </div>

              <div class="guests">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill text-wrap bg-light text-dark">5 Adults</span>
                <span class="badge rounded-pill text-wrap bg-light text-dark">4 Children</span>
              </div>

            </div>


            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
              <h6>200 Per Night</h6>
              <a href="" class="btn btn-sm w-100 text-decoration-none shadow-none btn btn-success mb-2">Book Now</a>
              <a href="" class="btn btn-sm w-100 btn-outline-dark text-decoration-none">More Details</a>

            </div>

          </div>
        </div>


        <div class="card mb-4 border-0 shaodw">
          <div class="row g-0 p-3 align-items-center">

            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="./carousel/1.webp" class="img-fluid rounded">
            </div>

            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-2">Simple Room Name</h5>

              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill text-wrap bg-light text-dark">2 Rooms</span>
                <span class="badge rounded-pill text-wrap bg-light text-dark">1 Bathroom</span>
                <span class="badge rounded-pill text-wrap bg-light text-dark">1 Balcony</span>
                <span class="badge rounded-pill text-wrap bg-light text-dark">3 Sofa</span>
              </div>

              <div class="facilities mb-3">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill text-wrap bg-light text-dark">Wifi</span>
                <span class="badge rounded-pill text-wrap bg-light text-dark">Television</span>
                <span class="badge rounded-pill text-wrap bg-light text-dark">AC</span>
                <span class="badge rounded-pill text-wrap bg-light text-dark">Room Heater</span>
              </div>

              <div class="guests">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill text-wrap bg-light text-dark">5 Adults</span>
                <span class="badge rounded-pill text-wrap bg-light text-dark">4 Children</span>
              </div>

            </div>


            <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-4">
              <h6>200 Per Night</h6>
              <a href="" class="btn btn-sm w-100 text-decoration-none shadow-none btn btn-success mb-2">Book Now</a>
              <a href="" class="btn btn-sm w-100 btn-outline-dark text-decoration-none">More Details</a>

            </div>

          </div>
        </div>



        <div class="card mb-4 border-0 shaodw">
          <div class="row g-0 p-3 align-items-center">

            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="./carousel/1.webp" class="img-fluid rounded">
            </div>

            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-2">Simple Room Name</h5>

              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill text-wrap bg-light text-dark">2 Rooms</span>
                <span class="badge rounded-pill text-wrap bg-light text-dark">1 Bathroom</span>
                <span class="badge rounded-pill text-wrap bg-light text-dark">1 Balcony</span>
                <span class="badge rounded-pill text-wrap bg-light text-dark">3 Sofa</span>
              </div>

              <div class="facilities mb-3">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill text-wrap bg-light text-dark">Wifi</span>
                <span class="badge rounded-pill text-wrap bg-light text-dark">Television</span>
                <span class="badge rounded-pill text-wrap bg-light text-dark">AC</span>
                <span class="badge rounded-pill text-wrap bg-light text-dark">Room Heater</span>
              </div>

              <div class="guests">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill text-wrap bg-light text-dark">5 Adults</span>
                <span class="badge rounded-pill text-wrap bg-light text-dark">4 Children</span>
              </div>

            </div>


            <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-4">
              <h6>200 Per Night</h6>
              <a href="" class="btn btn-sm w-100 text-decoration-none shadow-none btn btn-success mb-2">Book Now</a>
              <a href="" class="btn btn-sm w-100 btn-outline-dark text-decoration-none">More Details</a>

            </div>

          </div>
        </div>




      </div>





    </div>
  </div>









  <!-- Footer -->


  <?php include('./inc/footer.php'); ?>








</body>

</html>