<?php
// (1) START SESSION
session_start();
 
// (2) Logout Request
if (isset($_POST["logout"])) {
  session_destroy();
  unset($_SESSION);
}
 
// (3) REDIRECT TO LOGIN PAGE IF NOT LOGGED IN
if (!isset($_SESSION["username"])) {
  header("Location: ../index.php");
  exit();
}

