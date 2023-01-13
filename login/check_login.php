
<?php
session_start();
    $msg = '';

    if (
        isset($_POST['login']) && !empty($_POST['username'])
        && !empty($_POST['password'])
    ) {

        if (
            $_POST['username'] == 'user1' &&
            $_POST['password'] == 'pass1'
        ) {
            $_SESSION['userID'] = '786';
            $_SESSION['login_time'] = time();
            $msg = 'Successful login!';
           header('Refresh: 1; URL = ../index.php');
        } else if (
            $_POST['username'] == 'user2' &&
            $_POST['password'] == 'pass2'
        ) {
            $_SESSION['userID'] = '793';
            $_SESSION['login_time'] = time();
            $msg = 'Successful login!';
           header('Refresh: 1; URL = ../index.php');
        } else if (
            $_POST['username'] == 'admin' &&
            $_POST['password'] == 'admin'
        ) {
            $_SESSION['userID'] = '435';
            $_SESSION['login_time'] = time();
            $msg = 'Successful login!';
           header('Refresh: 1; URL = ../index.php');
        } else {
            $msg = 'Wrong username or password!';
        }
    }
    
    if (@$_POST['safeit'] == '1') {
        $logincookieduration = 31536000; //valid for 1 year
        setcookie("userID", $_SESSION['userID'], time() + $logincookieduration);
        setcookie("username", $_POST['username'], time() + $logincookieduration);
        setcookie("password", $_POST['password'], time() + $logincookieduration);
        setcookie("logincookie", $logincookieduration, time() + $logincookieduration);
    }
    ?>


