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
  <h2 class="fw-bold h-font text-center">UPDATE NEWSFEED</h2>

  <div class="h-line bg-dark"></div>

</div>

<div class="container">
  <div class="row">
    <div class="my-3 px-4">
      <div class="bg-white rounded shadow p-4">
        <form>
            <div class="mb-3">
                <label class="form-label" style="font-weight: 500;">Title</label>
                <input type="text" class="form-control shadow-none">
            </div>

            <div class="mb-3">
                <label class="form-label" style="font-weight: 500;">Article</label>
                <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label" style="font-weight: 500;">Image</label>
                <input class="form-control" type="file" id="formFile">
            </div>

            <button type="submit" class="btn btn-blue text-white mt-3">Post</button>
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


