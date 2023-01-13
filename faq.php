<!DOCTYPE html>
<html>
<head>
	<title>HOTEL ABC - FAQ</title>
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
  <h2 class="fw-bold h-font text-center">FAQs</h2>

  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    Any questions? Here you will find answers to various questions that are frequently asked.<br>If any further questions occur
    that are not among the below listed, please do not hesitate to contact us via <a href="contact.php">contact form</a>.
  </p>
</div>

<div class="container">
  <div class="row">

    <!-- question 1 -->
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/faq/question.svg" width="35px">
          <h5 class="m-0 ms-3">How long can we cancel free of charge?</h5>
        </div>  
          <p>
           All the bookings can be canceled free of charge until 2 days before arrival.
          </p> 
      </div>
    </div>

    <!-- question 2 -->
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/faq/question.svg" width="35px">
          <h5 class="m-0 ms-3">Do I have to pay deposit to secure my booking?</h5>
        </div>  
          <p>
           Yes. 20% of full price will be charged at booking.
          </p> 
      </div>
    </div>

    <!-- question 3 -->
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/faq/question.svg" width="35px">
          <h5 class="m-0 ms-3">What kinds of payment is accepted?</h5>
        </div>  
          <p>
           We accept cash, Visa, Eurocard, Amelican Express, Diners club and JCB.
          </p> 
      </div>
    </div>

    <!-- question 4 -->
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="images/faq/question.svg" width="35px">
          <h5 class="m-0 ms-3">What are check-in and check-out times?</h5>
        </div>  
          <p>
           Check-in: from 14:00<br>
           Check-out: until 11:00<br>
           (Upon request, late Check-in/out possible)
          </p> 
      </div>
    </div>

    <!-- question 5 -->
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/faq/question.svg" width="35px">
          <h5 class="m-0 ms-3">Why do you not accept cats?</h5>
        </div>  
          <p>
           Unfortunately 90% of our teams are allergic to cats..
          </p> 
      </div>
    </div>

    <!-- question 6 -->
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="images/faq/question.svg" width="35px">
          <h5 class="m-0 ms-3">Are there available parking spaces?</h5>
        </div>  
          <p>
           We have free parking ($5/hour).<br>
           Free of charge for hotel guests.

          </p> 
      </div>
    </div>

    <!-- question 7 -->
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="images/faq/question.svg" width="35px">
          <h5 class="m-0 ms-3">Is there a minibar in the room?</h5>
        </div>  
          <p>
           Yes, each room has a minibar with drinks and snacks. Penthause has kitchen corner incl. Nespresso Machine.
          </p> 
      </div>
    </div>

    <!-- question 8 -->
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="images/faq/question.svg" width="35px">
          <h5 class="m-0 ms-3">Is smoking allowed in the hotel?</h5>
        </div>  
          <p>
           We are non-smoking hotel.<br>You may smoke only in the Penthouse Balcony.
          </p> 
      </div>
    </div>

    <!-- question 9 -->
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="images/faq/question.svg" width="35px">
          <h5 class="m-0 ms-3">Is breakfast included in the price?</h5>
        </div>  
          <p>
           It difers from room types and plans.
           Otherwise, breakfastbuffet is offered($30/person).
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