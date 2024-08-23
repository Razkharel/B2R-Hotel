<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B2R Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/common.css" class="rel">
    <style>
        
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }
        .card-column {
          margin-bottom: 7rem; /* Space between cards */
        }

        .card-body {
          padding: 1.25rem; /* Adjust padding inside cards */
        }

        .container {
          padding: 0 15px; /* Container padding */
        }

        
        /* Firefox */
        input[type=number] {
          -moz-appearance: textfield;
        }
        

    </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">B2R Hotel</a>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Facilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">About</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
            Login
          </button>
          <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
            Register
          </button>
        </form>
      </div>
    </div>
  </nav>

  <!-- Modal -->
  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center" id="loginModalLabel">User Login</h5>
            <i class="bi bi-person-circle fs-3 me-2"></i>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label for="loginEmail" class="form-label">Email address</label>
              <input type="email" class="form-control" id="loginEmail" placeholder="name@example.com">
            </div>
            <div class="mb-3">
              <label for="loginPassword" class="form-label">Password</label>
              <input type="password" class="form-control" id="loginPassword" placeholder="Password">
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-center gap-3 mb-2">
            <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
          </div>

        </form>
      </div>
    </div>
  </div>


  
<!-- Swiper -->
  <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="Carousal/i1.jpg" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="Carousal/i2.jpg" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="Carousal/i3.jpg" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="Carousal/i4.jpg" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="Carousal/i5.jpg" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="Carousal/i6.jpg" class="w-100 d-block" />
        </div>
      </div>
    </div>

<!-- Check availability form -->

<div class="container shadow-lg availability-form">
  <div class="row">
    <div class="col-lg-12 bg-white shadow-lg p-4 rounded">
      <h5 class="mb-4">Check Booking Availability</h5>
      <form>
        <div class="row align-items-end">
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight: 500;">Check-In</label>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight: 500;">Check-Out</label>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight: 500;">Adult</label>
            <select class="form-select shadow-none" >
              <option selected>Select Number of Adults</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-lg-2 mb-3">
            <label class="form-label" style="font-weight: 500;">Children</label>
            <select class="form-select shadow-none" >
              <option selected>Select Number of Children</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-lg-1 mb-lg-3 mt-2">
            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Our Rooms -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3 card-column custom-right-shadow">
      <div class="card border-0 shadow-lg" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/1.jpg" class="card-img-top">
        <div class="card-body">
          <h5>Room Name</h5>
          <h6 class="mb-4">$120 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge text-bg-info text-dark mb-3 text-wrap lh-base">
              2 Rooms
            </span>
            <span class="badge text-bg-info text-dark mb-3 text-wrap lh-base">
              1 Bathrooms
            </span>
            <span class="badge text-bg-info text-dark mb-3 text-wrap lh-base">
              2 Balcony
            </span>
            <span class="badge text-bg-info text-dark mb-3 text-wrap lh-base">
              3 Sofas
            </span>
          </div>
          <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
                <span class="badge text-bg-info text-dark mb-3 text-wrap lh-base">
              Wifi
              </span>
              <span class="badge text-bg-info text-dark mb-3 text-wrap lh-base">
                Telivision
              </span>
              <span class="badge text-bg-info text-dark mb-3 text-wrap lh-base">
                AC
              </span>
              <span class="badge text-bg-info text-dark mb-3 text-wrap lh-base">
                Room Heater
              </span>
          </div>
          <div class="rating mb-4 ">
            <h6 class="mb-1 ">Rating</h6>
            <span class="badge rounded-pill bg-light">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
          </div>   
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 my-3 card-column custom-right-shadow">
      <div class="card border-0 shadow-lg" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/2.jpg" class="card-img-top">
        <div class="card-body">
          <h5>Room Name</h5>
          <h6 class="mb-4">$120 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge text-bg-info text-dark mb-3 text-wrap lh-base">
              2 Rooms
            </span>
            <span class="badge text-bg-info text-dark mb-3 text-wrap lh-base">
              1 Bathrooms
            </span>
            <span class="badge text-bg-info text-dark mb-3 text-wrap lh-base">
              2 Balcony
            </span>
            <span class="badge text-bg-info text-dark mb-3 text-wrap lh-base">
              3 Sofas
            </span>
          </div>
          <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
                <span class="badge text-bg-info text-dark mb-3 text-wrap lh-base">
              Wifi
              </span>
              <span class="badge text-bg-info text-dark mb-3 text-wrap lh-base">
                Telivision
              </span>
              <span class="badge text-bg-info text-dark mb-3 text-wrap lh-base">
                AC
              </span>
              <span class="badge text-bg-info text-dark mb-3 text-wrap lh-base">
                Room Heater
              </span>
          </div>
          <div class="rating mb-4 ">
            <h6 class="mb-1 ">Rating</h6>
            <span class="badge rounded-pill bg-light">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
          </div>   
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 my-3 card-column custom-right-shadow">
      <div class="card border-0 shadow-lg" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/3.jpg" class="card-img-top">
        <div class="card-body">
          <h5>Room Name</h5>
          <h6 class="mb-4">$120 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge text-bg-info text-dark mb-3 text-wrap lh-base">
              2 Rooms
            </span>
            <span class="badge text-bg-info text-dark mb-3 text-wrap lh-base">
              1 Bathrooms
            </span>
            <span class="badge text-bg-info text-dark mb-3 text-wrap lh-base">
              2 Balcony
            </span>
            <span class="badge text-bg-info text-dark mb-3 text-wrap lh-base">
              3 Sofas
            </span>
          </div>
          <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
                <span class="badge text-bg-info text-dark mb-3 text-wrap lh-base">
              Wifi
              </span>
              <span class="badge text-bg-info text-dark mb-3 text-wrap lh-base">
                Telivision
              </span>
              <span class="badge text-bg-info text-dark mb-3 text-wrap lh-base">
                AC
              </span>
              <span class="badge text-bg-info text-dark mb-3 text-wrap lh-base">
                Room Heater
              </span>
          </div>
          <div class="rating mb-4 ">
            <h6 class="mb-1 ">Rating</h6>
            <span class="badge rounded-pill bg-light">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
          </div>   
        </div>
      </div>
    </div>




    <div class="co-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>>></a>
    </div>
  </div>
</div>













<br><br><br>
<br><br><br>


  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center" id="loginModalLabel">User Registration</h5>
            <i class="bi bi-person-lines-fill"></i>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <span class="badge text-bg-info text-dark mb-3 text-wrap lh-base">
              Note: Your details must match with your ID(Photo card, Passport, Driving License).
              These are mandatory during check-in.
            </span>
            <br><br>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Phone Number</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Picture</label>
                  <input type="file" class="form-control shadow-none">
                </div>
                <div class="col-md-12 p-0 mb-3">
                  <label class="form-label">Address</label>
                  <textarea class="form-control shadow-none" rows="1"></textarea>
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Pin code</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Date of Birth</label>
                  <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Confirm Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
            </div>
        </form>
      </div>
    </div>
  </div>
  
      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
 <!-- Initialize Swiper -->
 <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      autoplay: {
      delay: 3000, // Time in milliseconds (3 seconds)
      effect: "fade",
      disableOnInteraction: false, // Continue autoplay after user interaction
      },
    });
  </script>


<
</body>
</html>
