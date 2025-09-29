<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top px-lg-3 py-lg-2">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-5" href="index.php">TJ Hotel</a>

    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link me-2" href="Rooms.php">Rooms</a>
        </li>

        <li class="nav-item">
          <a class="nav-link me-2" href="facilities.php">Facilities</a>
        </li>

        <li class="nav-item">
          <a class="nav-link me-2" href="contact.php">Contact Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link me-2" href="about.php">About</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

      </ul>


      <div class="d-flex" role="search">
        <button type="button" class="btn btn-outline-dark me-lg-2 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
          Login
        </button>

        <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#RegisterModal">
          Register
        </button>


      </div>
    </div>
  </div>
</nav>


<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>

        <div class="modal-header">
          <h1 class="modal-title fs-5 d-flex align-items-center"><i class="bi bi-person-circle me-2"></i> User Login </h1>
          <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" class="form-control shadow-none">
          </div>

          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="text" class="form-control shadow-none">
          </div>

          <div class="d-flex justify-content-between align-items-center mb-2">
            <button type="submit" class="btn btn-dark shadow-none">Login</button>
            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password ?</a>
          </div>


        </div>


      </form>

    </div>

  </div>
</div>



<div class="modal fade" id="RegisterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h1 class="modal-title fs-5 d-flex align-items-center"><i class="bi bi-person-lines-fill fs-2 me-2"></i> User Registeration </h1>
          <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <span class="badge rounded-pill text-bg-light mb-3 text-wrap"> Note :Your details Must Match with your id (Aadhar card,Passport,Driving License etc.that will be required during check-in) </span>

          <div class="container-fluid">
            <div class="row">

              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control shadow-none">
              </div>


              <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control shadow-none">
              </div>


              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Phone</label>
                <input type="number" class="form-control shadow-none">
              </div>


              <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Picture</label>
                <input type="file" class="form-control shadow-none">
              </div>


              <div class="col-md-12 ps-0 mb-3">
                <label class="form-label">Adddress</label>
                <textarea class="form-control shadow-none" rows="1"></textarea>
              </div>


              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Pin Code</label>
                <input type="text" class="form-control shadow-none">
              </div>


              <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Date of birth</label>
                <input type="date" class="form-control shadow-none">
              </div>


              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Password</label>
                <input type="text" class="form-control shadow-none">
              </div>


              <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="text" class="form-control shadow-none">
              </div>

            </div>
          </div>


          <div class="text-center my-1">
            <button type="submit" class="btn btn-dark shadow-none">Register</button>
          </div>

        </div>
      </form>
    </div>
  </div>
</div>