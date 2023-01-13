<!DOCTYPE html>
<html>
<head>
	<title>Hotel Booking Website</title>
	<!-- CSS only -->
<?php require('inc/links.php'); ?>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<style>
  .pop:hover{
    border-top-color: var(--teal) !important;
    transform: scale(1.03);
    transition: all    0.3s;
  }
</style>

</head>
<body>

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>

  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    HOTEL ABC enjoys a central location in the city - located along the Donau
    and nearby Vienna's most intriguing neighbourhoods. <br>
    We are pleased to provide a host of amenities designed to make your stay comfortable and carefree,
    leaving you at liberty to follow your curiosity.
  </p>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/facilities/Wifi.svg" width="40px">
          <h5 class="m-0 ms-3">WiFi</h5>
        </div>  
          <p>
           Free high-speed WiFi is available throughout the hotel, and wired internet
           is available in rooms. To access WiFi, you need access code.
          </p> 
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/facilities/gym.svg" width="40px">
          <h5 class="m-0 ms-3">Fitness Center</h5>
        </div>  
          <p>
           A complete range of equipment with the latest technology is available
           for you to carry out your routine at your own pace anytime you like!
          </p> 
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/facilities/spa.svg" width="40px">
          <h5 class="m-0 ms-3">Spa Studio</h5>
        </div>  
          <p>
           Nourish your mind and body with our rejuvenating treatments and therapies.
           Complete your relaxtation at our open terrace with sun loungers.
          </p> 
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/facilities/swimming.svg" width="40px">
          <h5 class="m-0 ms-3">Swimming</h5>
        </div>  
          <p>
            Currently only indoor pool is available. <br>
            Towels provided at pool. <br>
            Free access to Sauna. <br>
            Free admission. Open 24/7. Only for guests.

          </p> 
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/facilities/meeting.svg" width="40px">
          <h5 class="m-0 ms-3">Events</h5>
        </div>  
          <p>
           HOTEL ABC is pleased to offer 400 square meters of meeting space, 
           encompassing 16 venues that adapt to your needs with flexibility and modern aesthetic.

          </p> 
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/facilities/dining.svg" width="40px">
          <h5 class="m-0 ms-3">Dining</h5>
        </div>  
          <p>
           Explore a stimulating world of flavours, textures, and settings at HOTEL ABC's acclaimed restaurants and bars.<br>
           Opening hour: 6:00AM - 0:00AM
          </p> 
      </div>
    </div>

  </div>
</div>

<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>