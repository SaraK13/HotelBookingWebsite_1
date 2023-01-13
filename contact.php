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


</head>
<body>

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">CONTACT US</h2>

  <div class="h-line bg-dark"></div>

</div>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
      <h5>Address</h5>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2657.303589750431!2d16.375135415652625!3d48.23928307923168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d064f6ed971cf%3A0x99fec738bbb12f9d!2sUniversity%20of%20Applied%20Sciences%20Technikum%20Wien!5e0!3m2!1sen!2sat!4v1669032562298!5m2!1sen!2sat" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <a href="https://goo.gl/maps/exMQEA6DChn36ByG8" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
       <i class="bi bi-geo-alt-fill"></i> Höchstädtpl. 6, 1200 Wien
        </a>
        
        <h5 class="mt-4">Call us</h5>
        <a href="tel: +436701234567" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +43 6701234567</a>

        <h5 class="mt-4">Email</h5>
        <a href="mailto: hotelabc@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-envelope-fill "></i> hotelabc@gmail.com</a>

        <h5 class="mt-4">Follow us</h5>
        <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-twitter me-1"></i>
        </a>
        
        <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-facebook me-1"></i>
        </a>
        
        <a href="#" class="d-inline-block text-dark fs-5">
          <i class="bi bi-instagram me-1"></i>
          
        </a>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
        <form>
          <h5>Send a message</h5>
          <div class="mb-3">
          <label class="form-label" style="font-weight: 500;">Name</label>
          <input type="text" class="form-control shadow-none">
          </div>
          <div class="mb-3">
          <label class="form-label" style="font-weight: 500;">Email</label>
          <input type="email" class="form-control shadow-none">
          </div>
          <div class="mb-3">
          <label class="form-label" style="font-weight: 500;">Subject</label>
          <input type="text" class="form-control shadow-none">
          </div>
          <div class="mb-3">
          <label class="form-label" style="font-weight: 500;">Message</label>
          <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
          </div>
          <button type="submit" class="btn btn-blue text-white mt-3">Send</button>
        </form>
      </div>
    </div>
</div>
    
  </div>
</div>

<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>