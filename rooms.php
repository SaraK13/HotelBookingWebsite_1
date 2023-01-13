<!DOCTYPE html>
<html>
<head>
	<title>HOTEL ABC</title>
	<!-- CSS only -->
<?php require('inc/links.php'); ?>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>


</head>
<body>

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>

  <div class="h-line bg-dark"></div>
 
</div>

<!-- Search box -->
<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-0">
      <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
        <div class="container-fluid flex-lg-column align-items-stretch">
          <h4 class="mt-2">FILTERS</h4>

          <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
            <div class="border bg-light p-3 rounded mb-3">
              <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
              <label class="form-label">Check-in</label>
              <input type="date" class="form-control shadow-none mb-3">
              <label class="form-label">Check-out</label>
              <input type="date" class="form-control shadow-none">
            </div>

            <div class="border bg-light p-3 rounded mb-3">
              <h5 class="mb-3" style="font-size: 18px;">Room Highlights</h5>
              <div class="mb-2">
                <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                <label class="form-check-label" for="f1">Wifi</label>
              </div>
              <div class="mb-2">
                <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                <label class="form-check-label" for="f2">Television</label>
              </div>
              <div class="mb-2">
                <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                <label class="form-check-label" for="f3">AC</label>
              </div>
              <div class="mb-2">
                <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                <label class="form-check-label" for="f4">Room Heater</label>
              </div>
            </div>

            <div class="border bg-light p-3 rounded mb-3">
              <h5 class="mb-3" style="font-size: 18px;">Adults</h5>
              <div class="d-flex">
                <div class="me-2">
                  <label class="form-label">Adults</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div>
                  <label class="form-label">Children</label>
                  <input type="number" class="form-control shadow-none">
                </div>
              </div>
            </div>

            <div class="border bg-light p-3 rounded mb-3">
              <h5 class="mb-3" style="font-size: 18px;">Dogs</h5>
              <form>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="dogs" id="without_dogs" checked>
                  <label class="form-check-label" for="without_dogs">
                    Without
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="dogs" id="with_dogs">
                  <label class="form-check-label" for="with_dogs">
                    With
                  </label>
                </div>
              </form>
            </div>

            <a href="#" class="btn btn-sm w-100 text-white shadow-none mb-2">Search</a>

          </div>

        </div>
      </nav>
    </div>

    <!-- Rooms -->
    <div class="col-lg-9 col-md-12 px-4">
      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="images/rooms/room1.jpg" class="img-fluid rounded">
          </div>

          <!----   Room 1  ---->
          <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-3">Superior City View Room</h5>
            <div class="features mb-4">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    1 Room
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    1 Bathroom
                  </span>
            </div>

            <div class="Facilities mb-3">
              <h6 class="mb-1">Room Highlights</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Television
              </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  AC
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Room Heater
                </span>
            </div>

            <div class="guests">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Children
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 dog
              </span>
            </div>  
          </div>

          <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
            <h6 class="mb-4">$169 per night </h6>
            <a href="#" class="btn btn-blue btn-sm w-100 text-white shadow-none mb-2">Book Now</a>
          </div>

        </div>
      </div>

      <!----   Room 2   ---->
      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="images/rooms/room2.jpg" class="img-fluid rounded">
          </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-3">Deluxe City View Room</h5>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Room
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Sofa
              </span>
            </div>
                <div class="Facilities mb-3">
                  <h6 class="mb-1">Room Highlights</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Television
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Room Heater
                  </span>
                </div>
                <div class="guests">
                  <h6 class="mb-1">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2+ Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    3 Children
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2+ dogs
                  </span>
                </div>  
          </div>
          <div class="col-md-2 text-center">
            <h6 class="mb-4">$199 per night </h6>
            <a href="#" class="btn btn-sm w-100 text-white btn-blue shadow-none mb-2">Book Now</a>
          </div>
        </div>
      </div>

      <!----   Room 3   ---->
      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="images/rooms/mainFoto.jpg" class="img-fluid rounded">
          </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-3">Deluxe One-Bedroom City View Sweet</h5>
            <div class="features mb-4">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    1 Room
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    1 Bathroom
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    1 Sofa
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Breakfast inclusive
                  </span>
                </div>
                <div class="Facilities mb-3">
                  <h6 class="mb-1">Room Highlights</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Television
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Room Heater
                  </span>
                </div>
                <div class="guests">
                  <h6 class="mb-1">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">  
                    2 Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">  
                    2+ dogs
                  </span>
                </div>  
          </div>
          <div class="col-md-2 text-center">
            <h6 class="mb-4">$269 per night </h6>
            <a href="#" class="btn btn-sm w-100 text-white btn-blue shadow-none mb-2">Book Now</a>
          </div>
        </div>
      </div>

      <!----   Room 4   ---->
      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="images/rooms/room3.jpg" class="img-fluid rounded">
          </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-3">Deluxe Two-Bedroom City View Sweet</h5>
            <div class="features mb-4">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Rooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Bathroom
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    1 Balcony
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    3 Sofa
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Breakfast inclusive
                  </span>
                </div>
                <div class="Facilities mb-3">
                  <h6 class="mb-1">Room Highlights</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Television
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Room Heater
                  </span>
                </div>
                <div class="guests">
                  <h6 class="mb-1">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">  
                    2+ Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">  
                    2+ dogs
                  </span>
                </div>  
          </div>
          <div class="col-md-2 text-center">
            <h6 class="mb-4">$369 per night </h6>
            <a href="#" class="btn btn-sm w-100 text-white btn-blue shadow-none mb-2">Book Now</a>
          </div>
        </div>
      </div>

      <!----   Room 5   ---->
      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="images/rooms/room8.jpg" class="img-fluid rounded">
          </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-3">Penthouse One-Bedroom Suite</h5>
            <div class="features mb-4">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    1 Room
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Bathroom
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    1 Balcony
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    3 Sofa
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Breakfast inclusive
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Kitchen
                  </span>
                </div>
                <div class="Facilities mb-3">
                  <h6 class="mb-1">Room Highlights</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Television
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Room Heater
                  </span>
                </div>
                <div class="guests">
                  <h6 class="mb-1">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">  
                    2+ Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">  
                    2+ dogs
                  </span>
                </div>  
          </div>
          <div class="col-md-2 text-center">
            <h6 class="mb-4">$459 per night </h6>
            <a href="#" class="btn btn-sm w-100 text-white btn-blue shadow-none mb-2">Book Now</a>
          </div>
        </div>
      </div>

      <!----   Room 6   ---->
      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="images/rooms/penthouse.jpg" class="img-fluid rounded">
          </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-3">Penthouse Three-Bedroom Suite</h5>
            <div class="features mb-4">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    3 Rooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Bathroom
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Balcony
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    3 Sofa
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Breakfast inclusive
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Kitchen
                  </span>
                </div>
                <div class="Facilities mb-3">
                  <h6 class="mb-1">Room Highlights</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Television
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Room Heater
                  </span>
                </div>
                <div class="guests">
                  <h6 class="mb-1">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">  
                    2+ Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">  
                    2+ children
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">  
                    2+ dogs
                  </span>
                </div>  
          </div>
          <div class="col-md-2 text-center">
            <h6 class="mb-4">$759 per night </h6>
            <a href="#" class="btn btn-sm w-100 text-white btn-blue mb-2">Book Now</a>
          </div>
        </div>
      </div>

    </div>
    <!-------   Rooms end   ------->



<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>