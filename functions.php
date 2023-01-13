<?php
//for XSS
function h($s){
    return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}

// set token to session
function setToken(){
    $token = sha1(uniqid(mt_rand(), true));
    $_SESSION['token'] = $token;
}

// check session variable token and posted token
function checkToken(){
    if(empty($_SESSION['token']) || ($_SESSION['token'] != $_POST['token'])){
        echo 'Invalid POST', PHP_EOL;
        exit;
    }
}

// POST validation
function validation($datas,$confirm = true)
{
    $errors = [];

    // check username
    if(empty($datas['username'])) {
        $errors['username'] = 'Please enter username.';
    }else if(mb_strlen($datas['username']) > 20) {
        $errors['username'] = 'Please enter up to 20 characters.';
    }

    // password check 
    if(empty($datas["password"])){
        $errors['password']  = "Please enter a password.";
    }else if(!preg_match('/\A[a-z\d]{8,100}+\z/i',$datas["password"])){
        $errors['password'] = "Please set a password with at least 8 characters.";
    }
    //password confirm check (only first time registration)
    if($confirm){
        if(empty($datas["confirm_password"])){
            $errors['confirm_password']  = "Please confirm password.";
        }else if(empty($errors['password']) && ($datas["password"] != $datas["confirm_password"])){
            $errors['confirm_password'] = "Password did not match.";
        }
    }

    return $errors;
}