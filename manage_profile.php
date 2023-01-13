<!DOCTYPE html>
<html>
<head>
	<title>HOTEL ABC - manage profile</title>
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

<?php if (@$_SESSION['userID'] == '786' or @$_SESSION['userID'] == '793') { ?>
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Hello, user !</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark">
                <div class="d-flex align-items-center mb-2">
                    <h5 class="m-0 ms-3">Manage your account - Coming soon</h5>
                </div>  
            </div>
        </div>
    </div>
				
			<?php } elseif(@$_SESSION['userID'] == '435') { ?>
				<div class="my-5 px-4">
                    <h2 class="fw-bold h-font text-center">Hello, admin !</h2>
                    <div class="h-line bg-dark"></div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark">
                            <div class="d-flex align-items-center mb-2">
                            <h5 class="m-0 ms-3">Manage your account - Coming soon</h5>
                            </div>  
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <li><a class="dropdown-item" href="news.php">Newsfeed</a></li>
            <?php } ?>



<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>