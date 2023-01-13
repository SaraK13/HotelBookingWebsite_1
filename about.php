<!DOCTYPE html>
<html>
<head>
	<title>HOTEL ABC - Impressum</title>
	<!-- CSS only -->
<?php require('inc/links.php'); ?>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<!-- <style>
  .box{
    border-top-color: var(--teal) !important;
  }
</style> -->

</head>
<body>

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">IMPRESSUM INFRORMATION</h2>

  <div class="h-line bg-dark"></div>
  <!-- <p class="text-center mt-3">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat.
  </p> -->
</div>

<div class="container">
  <div class="row justify-content-between align-items-center">
    <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
      <h4 class="mb-3">Hotel ABC</h4>
      <h6 class="mb-3">ABC Gesellschaft m.b.H.</h6>

      <h6 class="mb-3">Höchstädtpl. 6, 1200 Wien, Österreich</h6><br>
      <h6 class="mb-3">Tel.: +436701234567</h6>
      <h6 class="mb-3">Email: hotelabc@gmail.com</h6>
      <h6 class="mb-3">Web: www.hotelabc.com</h6><br>
      <h6 class="mb-3">Commercial Register number: 123 456a</h6>
      <h6 class="mb-3">Commercial Register Court: Gerichtsstand Wien</h6>
      <h6 class="mb-3">Regulatory authority: Magistrat der Stadt Wien</h6>
      <h6 class="mb-3">Membership: WKO, ÖHV</h6><br>
      <h6 class="mb-3">VAT Number: ATU 12345678</h6>
    </div>
    <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
      <img src="images/about/about1.jpg" class="w-100">
    </div>
  </div>
</div>

<!-- <div class="container mt-5">
  <div class="row">
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/hotel.svg" width="70px">
        <h4 class="mt-3">100+ ROOMS</h4>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/customers.svg" width="70px">
        <h4 class="mt-3">200+ CUSTOMERS</h4>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/rating.svg" width="70px">
        <h4 class="mt-3">150+ REVIEWS</h4>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/staff.svg" width="70px">
        <h4 class="mt-3">200+ STAFFS</h4>
      </div>
    </div>
  
  </div>
</div> -->

<!-- management team photos -->
<h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>
<div class="container px-4">
   <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/SaraPhoto.jpg" class="w-50">
          <h5 class="mt-2">Sara Konno</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/ZeynebPhoto.jpg" class="w-50">
          <h5 class="mt-2">Zeyneb Aboelnasr</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/toni.jpg" class="w-50">
          <h5 class="mt-2">Toni Hope</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/alex.jpg" class="w-50">
          <h5 class="mt-2">Alex Stoll</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/bob.jpg" class="w-50">
          <h5 class="mt-2">Bob Ford</h5>
        </div>
        
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/sasha.jpg" class="w-50">
          <h5 class="mt-2">Sasha Keller</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/Kim.jpg" class="w-50">
          <h5 class="mt-2">Kim Madison</h5>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
</div>


<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

 <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

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
            slidesPerView: 3,
          },
          1024: {
            slidesPerView: 3,
          },
        }
      });
    </script>
</body>
</html>