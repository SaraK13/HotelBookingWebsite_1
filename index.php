
<!DOCTYPE html>
<html>
	<head>
		<title>Hotel ABC</title>
		<!-- CSS only -->
		<?php require('inc/links.php'); ?>
		<link
		rel="stylesheet"
		href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="css/common.css">
		<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

		<style type="text/css">
			
			.availability-form{
				margin-top: -50px;
				z-index: 2;
				position: relative;
			}

			@media screen and (max-width: 575px) {
			.availability-form{
				margin-top: 25px;
				padding: 0 35px;
			}

			}
		</style>
		<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
	
	</head>

	<body>


	<?php require('inc/header.php'); ?>
	

	<!-- Swiper Carousal-->
	<div class="container-fluid px-lg-4 mt-4">
		<div class="swiper swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
				<img src="images/carousel/gymCar.jpg" class="w-100 d-block" />
				</div>
				<div class="swiper-slide">
				<img src="images/carousel/lobbyCar.jpg" class="w-100 d-block" />
				</div>
				<div class="swiper-slide">
				<img src="images/carousel/mainphotoCar.jpg" class="w-100 d-block" />
				</div>
				<div class="swiper-slide">
				<img src="images/carousel/poolCar.jpg" class="w-100 d-block" />
				</div>
				<div class="swiper-slide">
				<img src="images/carousel/room3Car.jpg" class="w-100 d-block" />
				</div>
				<div class="swiper-slide">
				<img src="images/carousel/room5Car.jpg" class="w-100 d-block" />
				</div>
				
			</div>
		</div>
	</div>

	<!----   check avilability form   ---->
	<div class="container availability-form">
		<div class="row">
			<div class="col-lg-12 bg-white shadow p-4 rounded">
				<h5 class="col-lg-3">Check Booking Availability</h5>
				<form>
					<div class="row align-items-end">
						<div class="col-lg-3 mb-3">
							<label class="form-label" style="font-weight: 500;">Check-in</label>
							<input type="date" class="form-control shadow-none" required>
						</div>
						<div class="col-lg-3 mb-3">
							<label class="form-label" style="font-weight: 500;">Check-out</label>
							<input type="date" class="form-control shadow-none" required>
						</div>
						<div class="col-lg-2 mb-3">
							<label class="form-label" style="font-weight: 500;">Adult</label>
							<input type="text" class="form-control shadow-none" required>
						</div>
						<div class="col-lg-2 mb-3">
							<label class="form-label" style="font-weight: 500;">Children</label>
							<input type="text" class="form-control shadow-none" required>
						</div>
						<div class="col-lg-3 mb-3">
							<label class="form-label" style="font-weight: 500;">Breakfast</label>
							<select class="form-select shadow-none">
								<option value="without">without</option>
								<option value="include">with</option>
							</select>
						</div>
						<div class="col-lg-3 mb-3">
							<label class="form-label" style="font-weight: 500;">Pets(dogs only)</label>
							<select class="form-select shadow-none">						
								<option value="without">without</option>
								<option value="include">with (+$15 per day)</option>
							</select>
						</div>
						<div class="col-lg-3 mb-3">
							<label class="form-label" style="font-weight: 500;">Parking</label>
							<select class="form-select shadow-none">
								<option value="without">without</option>
								<option value="include">with</option>
							</select>
						</div>
						<div class="col-lg-1 mb-lg-3 mt-2">
							<button type="submit" href="rooms.php" class="btn text-light shadow-none bg-secondary">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<!----   Our Rooms   ---->
	<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 my-3">
				<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
					<img src="images/rooms/room1.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Standard</h5>
						<h6 class="mb-4">$89 per night </h6>
						<div class="features mb-4">
							<h6 class="mb-1">Features</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								1 Room
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								1 Bathroom
							</span>
						</div>
						<div class="Facilities mb-4">
							<h6 class="mb-1">Facilities</h6>
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

						<div class="guests mb-4">
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
							
						<div class="d-flex justify-content-evenly mb-2">
							<a href="#" class="btn btn-sm text-white bg-dark shadow-none">Book Now</a>								<a href="rooms.php" class="btn btn-sm text-white shadow-none">More details</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 my-3">
				<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
					<img src="images/rooms/room2.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Sweet</h5>
						<h6 class="mb-4">$149 per night </h6>
						<div class="features mb-4">
							<h6 class="mb-1">Features</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								2 Rooms
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								1 Bathroom
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								1 Balcony
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								1 Sofa
							</span>
						</div>
						<div class="Facilities mb-4">
							<h6 class="mb-1">Facilities</h6>
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

						<div class="guests mb-4">
							<h6 class="mb-1">Guests</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								4 Adults
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								4 Children
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								2+ dogs
							</span>
						</div>	
							
						<div class="d-flex justify-content-evenly mb-2">
							<a href="#" class="btn btn-sm text-white bg-dark shadow-none">Book Now</a>
							<a href="rooms.php" class="btn btn-sm text-white shadow-none">More details</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 my-3">
				<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
					<img src="images/rooms/room3.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Deluxe</h5>
						<h6 class="mb-4">$189 per night </h6>
						<div class="features mb-4">
							<h6 class="mb-1">Features</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								3 Rooms
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								2 Bathrooms
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								1 Balcony
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								3 Sofas
							</span>
						</div>
						<div class="Facilities mb-4">
							<h6 class="mb-1">Facilities</h6>
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

						<div class="guests mb-4">
							<h6 class="mb-1">Guests</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								4 Adults
							</span>
						</div>	
							
						<div class="d-flex justify-content-evenly mb-2">
							<a href="#" class="btn btn-sm text-white bg-dark shadow-none" >Book Now</a>
							<a href="index.php?page=rooms?" class="btn btn-sm text-white shadow-none">More details</a>
						</div>
					</div>
				</div>
			</div>


			<div class="col-lg-12 text-center mt-5">
				<a href="rooms.php" class="btn btn-sm text-white rounded rounded-0 fw-bold shadow-none">More Rooms</a>
			</div>
		</div>	
	</div>

	<!-- Our Facilities-->
	<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
	<div class="container">
		<div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
				<img src="images/Facilities/wifi.svg" width="80px">
				<h5 class="mt-3">Wifi</h5>
			</div>
			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
				<img src="images/Facilities/gym.svg" width="80px">
				<h5 class="mt-3">Fitness Center</h5>
			</div>
			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
				<img src="images/Facilities/spa.svg" width="80px">
				<h5 class="mt-3">Spa Studio</h5>
			</div>
			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
				<img src="images/Facilities/swimming.svg" width="80px">
				<h5 class="mt-3">Swimming</h5>
			</div>
			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
				<img src="images/Facilities/dining.svg" width="80px">
				<h5 class="mt-3">Dining</h5>
			</div>
			<div class="col-lg-12 text-center mt-5">
				<a href="facilities.php" class="btn btn-sm text-white rounded rounded-0 fw-bold shadow-none">More Facilities >>></a>
			</div>
		</div>
	</div>

	

	<!-- Contact us-->
	<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Contact us</h2>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2657.303589750431!2d16.375135415652625!3d48.23928307923168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d064f6ed971cf%3A0x99fec738bbb12f9d!2sUniversity%20of%20Applied%20Sciences%20Technikum%20Wien!5e0!3m2!1sen!2sat!4v1669032562298!5m2!1sen!2sat" width="800" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
			<div class="col-lg-4 col-md-4 ">
				<div class="bg-white p-4 rounded">
					<h5>Contact</h5>
					<a href="https://goo.gl/maps/exMQEA6DChn36ByG8" class="d-inline-block mb-2 text-decoration-none text-dark">Höchstädtpl. 6, 1200 Vienna,Austria</a>
					<br>
					<a href="tel: +436701123456" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +43 6701234567</a>
				</div>	
				<div class="bg-white p-4 rounded">
					<h5>Follow us</h5>
					<a href="#" class="d-inline-block mb-3">
						<span class="badge bg-light text-dark fs-6 p-2">
							<i class="bi bi-twitter me-1"></i>Twitter
						</span>
					</a>
					<br>
					<a href="#" class="d-inline-block mb-3">
						<span class="badge bg-light text-dark fs-6 p-2">
							<i class="bi bi-facebook me-1"></i>Facebook
						</span>
					</a>
					<br>
					<a href="#" class="d-inline-block">
						<span class="badge bg-light text-dark fs-6 p-2">
							<i class="bi bi-instagram me-1"></i>Instagram
						</span>
					</a>
				</div>
			</div>
		</div>
	</div>

	<hr>
	<?php require('inc/footer.php') ?>
	<!-- JavaScript Bundle with Popper -->

	<!-- Swiper JS -->
	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
	
		<!-- Initialize Swiper -->
		<script>
		var swiper = new Swiper(".swiper-container", {
			spaceBetween: 30,
			effect: "fade",
			loop: true,
			autoplay: {
				delay: 3500,
				disableOnInteraction: false,
			}
		});

		var swiper = new Swiper(".swiper-testimonials", {
			effect: "coverflow",
			grabCursor: true,
			centeredSlides: true,
			slidesPerView: "auto",
			slidesPerView: "3",
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
					slidesPerView: 3,
				},
			}
		});
		</script>
	
	</body>
</html>