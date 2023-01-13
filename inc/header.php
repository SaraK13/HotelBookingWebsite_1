<?php
session_start();
require_once "../routing.php";


// index.php?page=about

//$requestedPage == "about"
$requestedPage = getRequestedPage();

include_once "../".$requestedPage;

if (isset($_COOKIE["logincookie"])) {
    $login_session_duration = $_COOKIE["logincookie"];
} else {
    $login_session_duration = 3600; // 1 hour
}
?>

<!-- 
	GET-Request
 -->

<nav class="navbar navbar-expand-lg bg-light px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">HOTEL ABC</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="rooms.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Rooms</a>
		  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		  	
		  	<?php if (@$_SESSION['userID'] == '786' or @$_SESSION['userID'] == '793') { ?>
				<li><a class="dropdown-item" href="rooms.php">Reserve a new room</a></li>
				<li><a class="dropdown-item" href="rooms.php">My reservation</a></li>

			<?php } elseif(@$_SESSION['userID'] == '435') { ?>
				<li><a class="dropdown-item" href="rooms.php">Reserve a new room</a></li>
            	<li><a class="dropdown-item" href="#">All reserved rooms</a></li>
            <?php } else { ?>
                <li><a class="dropdown-item" href="rooms.php">Reserve new room</a></li>
            <?php } ?>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="contact.php">Contact Us</a>
        </li>
		<li class="nav-item">
          <a class="nav-link me-2" href="faq.php">FAQ</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            News
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		  	
		  	<?php if (@$_SESSION['userID'] == '786' or @$_SESSION['userID'] == '793') { ?>
				<li><a class="dropdown-item" href="news.php">Newsfeed</a></li>
			<?php } elseif(@$_SESSION['userID'] == '435') { ?>
				<li><a class="dropdown-item" href="news.php">Newsfeed</a></li>
            	<li><a class="dropdown-item" href="news_update.php">Update Newsfeed</a></li>
            <?php } else { ?>
                <li><a class="dropdown-item" href="news.php">Newsfeed</a></li>
            <?php } ?>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Account
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		  	
		  	<?php if (@$_SESSION['userID'] == '786' or @$_SESSION['userID'] == '793') { ?>
				<li><a class="dropdown-item" href="#">Manage profile</a></li>
			<?php } elseif(@$_SESSION['userID'] == '435') { ?>
				<li><a class="dropdown-item" href="#">User list</a></li>
            <?php } else { ?>
            
            <?php } ?>
          </ul>
        </li>

		<?php if (@$_SESSION['userID'] == '786' or @$_SESSION['userID'] == '793') { ?>
			<li class="nav-item dropdown">
          		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            	Account
          		</a>
          		<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="#">User list</a></li>
            <?php } else { ?>
            
            <?php } ?>


      </ul>
      <div class="d-flex" role="search">

	  <?php if (@$_SESSION['userID'] == '786' or @$_SESSION['userID'] == '793' or @$_SESSION['userID'] == '435') { ?>
                <a class="nav-link" href="./login/logout.php">Logout</a>
        <?php } else { ?>
			<button type="button" class="btn text-white shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModel">Login	</button>
        	<button type="button" class="btn text-white shadow-none" data-bs-toggle="modal" data-bs-target="#registerModel">Register	</button>
        <?php } ?>
        <!-- <button type="button" class="btn text-white shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModel">Login	</button>
        <button type="button" class="btn text-white shadow-none" data-bs-toggle="modal" data-bs-target="#registerModel">Register	</button> -->
      </div>
    </div>
  </div>
</nav>

<!-----  Login  ----->
<div class="modal fade" id="loginModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">

	<!----   FORM   ---->
    <div class="modal-content">
    	<form action="login/check_login.php" method="post">
    		<div class="modal-header">
				<h5 class="modal-title d-flex align-items-center">
					<i class="bi bi-person-circle fs-3 me-2"> Login</i>
				</h5>
				<button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      		</div>

      		<div class="modal-body">
				<div class="mb-3">
					<label class="form-label">Username</label>
					<input type="text" name="username" class="form-control shadow-none" required>
				</div>
				<div class="mb-4">
					<label class="form-label">Password</label>
					<input type="password" name="password" class="form-control shadow-none" required>
				</div>
				<div class="d-flex align-items-center justify-content-between mb-2">
					<button type="submit" value="login" class="btn text-white shadow-none" name="login">LOGIN</button>
					<a href="JavaScript: void(0)" class="text-secondary text-decoration-none" >Forgot Password</a>
				</div>
      		</div>
    	</form>
    </div>
  </div>
</div>

<!-----  Register  ----->
<div class="modal fade" id="registerModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	
    	<form action="./register/regiser.php" method="post">
    		<div class="modal-header">
        	<h5 class="modal-title d-flex align-items-center">
        	<i class="bi bi-person-lines-fill fs-3 me-2"> Registration</i>
        	</h5>
        	<button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      		</div>
      		<div class="modal-body">
    		<div class="container-fluid">
    			<div class="row">
				<div class="col-md-2 ps-0 mb-3">
    					<label class="form-label">Title</label>
    					<select class="form-select shadow-none">						
							<option value="mr">Mr.</option>
							<option value="mr">Ms.</option>
							<option value="mr">Mrs.</option>
						</select>
    				</div>
    				<div class="col-md-5 ps-0 mb-3">
    					<label class="form-label">First Name</label>
    					<input type="text" name="firstname" class="form-control shadow-none" required>
    				</div>
					<div class="col-md-5 ps-0 mb-3">
    					<label class="form-label">Last Name</label>
    					<input type="text" name="lastname" class="form-control shadow-none" required>
    				</div>
					<div class="col-md-5 ps-0 mb-3">
    					<label class="form-label">Email</label>
    					<input type="email" name="userEmail" class="form-control shadow-none" required>
    				</div>
					<div class="col-md-2 ps-0 mb-3">
    					<label class="form-label">Country</label>
    					<input type="tel" name="countryNum" class="form-control shadow-none" required placeholder="+43">
    				</div>
    				<div class="col-md-5 ps-0 mb-3">
    					<label class="form-label">Phone Number</label>
    					<input type="tel" name="phonen" class="form-control shadow-none" required placeholder="(000)000-0000">
    				</div>
					<div class="col-md-12 p-0 mb-3">
    					<label class="form-label">Username (8-20 characters)</label>
    					<input type="text" name="username" class="form-control shadow-none" required>
    				</div>
    				<div class="col-md-6 ps-0 mb-3">
    					<label class="form-label">Password</label>
    					<input type="password" name="password" class="form-control shadow-none" required>
    				</div>
    				<div class="col-md-6 p-0">
    					<label class="form-label">Confirm Password</label>
    					<input type="password" name="password_conf" class="form-control shadow-none" required>
    				</div>
    				<div class="text-center my-1">
    					<button type="submit" class="btn text-white shadow-none">Register</button>
    				</div>
    			</div>
    		</div>	
        	
    	</form>
      
    </div>
  </div>
</div>
	
</div>