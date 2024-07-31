<?php 

//check for form submission
if (isset($_POST["submit"])) {


//connect
require_once 'database.php';
require_once 'functions.php';

$email = $_POST["email"];
$password = $_POST["password"];


    
if (emptyInputslogin($email, $password) !== false) {
    exit();
}
LoginUser($conn, $email, $password);






}else{
    header('Location:../Login.php');
    exit();
}

