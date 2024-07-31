<?php

//for registation

function emptyInputsSignup($username, $email, $password, $REpassword) {
    $result;
    if (empty($username) || empty($email) || empty($password) || empty($REpassword)) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function passwordMatch($password, $REpassword) {
    $result;
    if ($password !== $REpassword) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function usernameExists2($conn, $email) {
    $sql = "SELECT * FROM  registrations WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:../Registration.php?error=stmtfailedEmail");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }else{
        return false;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn,$username, $email, $password) {
    $sql = "INSERT INTO registrations (name,email,password) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:../Registration.php?error=stmtfailed2");
        exit();
    }
    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedpassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
     echo"<script>alert('Registration Sussusfull');window.location.href='../Login.php';</script>";
    exit();
}



//for login

function emptyInputsLogin($email, $password) {
    $result;
    if (empty($email) || empty($password)) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function LoginUser($conn, $email, $password) {
    $usernameExists2 = usernameExists2($conn, $email);
    if ($usernameExists2 === false){
        header("Location:../Login.php?error=wronglogin1");
        exit();
    }

    $pwdHashed = $usernameExists2["password"];
    $checkpwd = password_verify($password, $pwdHashed);

    if ($checkpwd === false){
        header("Location:../Login.php?error=wronglogin2");
        exit();
        
    }else if ($checkpwd === true){
        session_start();
        $_SESSION["email"] = $usernameExists2["email"];
        $_SESSION["username"]=$usernameExists2["name"];
        header("Location:../../After login/product.php");
        exit();
        
    }
}





