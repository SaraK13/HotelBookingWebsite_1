<!DOCTYPE html>
<html>
<head>
	<title>HOTEL ABC - NEWS</title>
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
  <h2 class="fw-bold h-font text-center">NEWSFEED</h2>

  <div class="h-line bg-dark"></div>
</div>

<div class="container">
  <div class="row">
    <!-- news 1 -->
    <div class="card col-lg-4 col-md-6 mb-5 px-4 news-bottom">
        <div class="bg-image hover-overlay ripple news-padding" data-mdb-ripple-color="light">
            <img src="images/news/news1.jpg" class="img-fluid"/>
        </div>
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>

    <!-- news 2 -->
    <div class="card col-lg-4 col-md-6 mb-5 px-4 news-size">
        <div class="bg-image hover-overlay ripple news-padding" data-mdb-ripple-color="light">
            <img src="images/news/news4.jpg" class="img-fluid"/>
        </div>
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>

    <!-- news 3 -->
    <div class="card col-lg-4 col-md-6 mb-5 px-4 news-size">
        <div class="bg-image hover-overlay ripple news-padding" data-mdb-ripple-color="light">
            <img src="images/news/news6.jpg" class="img-fluid"/>
        </div>
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>

    <!-- news 4 -->
    <div class="card col-lg-4 col-md-6 mb-5 px-4 news-size">
        <div class="bg-image hover-overlay ripple news-padding" data-mdb-ripple-color="light">
            <img src="images/news/news4.jpg" class="img-fluid"/>
        </div>
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>

    <!-- news 5 -->
    <div class="card col-lg-4 col-md-6 mb-5 px-4 news-size">
        <div class="bg-image hover-overlay ripple news-padding" data-mdb-ripple-color="light">
            <img src="images/news/news5.jpg" class="img-fluid"/>
        </div>
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>

    <!-- news 6 -->
    <div class="card col-lg-4 col-md-6 mb-5 px-4 news-size">
        <div class="bg-image hover-overlay ripple news-padding" data-mdb-ripple-color="light">
            <img src="images/news/news6.jpg" class="card-img-top aspect-ratio-16-9"/>
        </div>
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>

    

    

    

  </div>
</div>

<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>