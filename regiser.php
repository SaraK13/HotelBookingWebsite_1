
<?php
//Loading Files
require_once ('../DB_connection.php');
require 'DB_connection.php';
$db_obj = new mysql($host, $user, $password, $database);

if($db_obj->connect_error){
    echo "Connection Error: " . $db_obj->connect_error;
    exit();
}

$sql = "INSERT INTO `user`(`Firstname`, `Lastname`, `ID`, `Email`, `Password`, `user name`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')";
$stmt = $db_obj->prepare($sql);
$stmt-> bind_param("ssssssii", $username, $password, $userEmail, $firstname, $lastname, $title, $countryNum, $phone);

 require_once "functions.php";

// start session
session_start();

// Define and initialize variables to store POSTed data
$datas = [
    'title'  => '',
    'firstname'  => '',
    'lastname'  => '',
    'username'  => '',
    'userEmail'  => '',
    'countryNum'  => '',
    'phone'  => '',
    'password'  => '',
    'confirm_password'  => ''
];

// If it was a GET communication, add a token to the session variable
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    setToken();
}
// If it is POST communication, start new registration process to DB
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // CSRF countermeasures
    checkToken();

    // Stores POST data in a variable
    foreach($datas as $key => $value) {
        if($value = filter_input(INPUT_POST, $key, FILTER_DEFAULT)) {
            $datas[$key] = $value;
        }
    }

    // validation
    $errors = validation($datas);

    // Check if the same user name exists in the database
    if(empty($errors['username'])){
        $sql = "SELECT id FROM users WHERE username = :username";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue('username',$datas['username'],PDO::PARAM_INT);
        $stmt->execute();
        if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $errors['username'] = 'This username is already taken.';
        }
    }

    // Check if the same email  exists in the database
    if(empty($errors['userEmail'])){
        $sql = "SELECT id FROM users WHERE userEmail = :userEmail";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue('userEmail',$datas['userEmail'],PDO::PARAM_INT);
        $stmt->execute();
        if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $errors['userEmail'] = 'This email is already taken.';
        }
    }

        $pdo->beginTransaction(); // transaction processing
        try {
            $username = $_POST["username"];
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $userEmail = $_POST["userEmail"];
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $title = $_POST["title"];
            $countryNum = $_POST["countryNum"];
            $phone = $_POST["phone"];
            $stmt->execute();
            $pdo->commit();
            header("location: ../index.php");
            exit;
        } catch (PDOException $e) {
            echo 'ERROR: Could not register.';
            $pdo->rollBack();
        }
    }
}
?>
