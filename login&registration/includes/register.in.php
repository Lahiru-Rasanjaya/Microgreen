<?php

//check for form submission
if (isset($_POST["submit"])) {

//connect
require_once 'database.php';
require_once 'functions.php';

$username = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$REpassword = $_POST["REpassword"];


$emptyInput = emptyInputsSignup($username, $email, $password, $REpassword);
$invalidEmail = invalidEmail($email);
$passwordMatch = passwordMatch($password, $REpassword);
$usernameExists2 = usernameExists2($conn, $email);
    
if ($emptyInput !== false) {
    header("Location:../Registration.php?error=emptyinput");
    exit();
}
if ($invalidEmail !== false) {
    header("Location:../Registration.php?error=invalidEmail");
    exit();
}
if ($passwordMatch !== false) {
    header("Location:../Registration.php?error=passwordsdontmatch");
    exit();
}
if ($usernameExists2 !== false) {
    header("Location:../Registration.php?error=userEmail");
    exit();
}
createUser($conn,$username, $email, $password);

}else{
    header('Location:../Login.php');
    exit();
}

