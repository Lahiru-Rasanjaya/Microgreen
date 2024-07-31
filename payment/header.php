<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MicroGreen</title>
    <link rel="stylesheet"href="style.css?v=<?php echo time(); ?>">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>

<form action="" method="">  
<ul>
<li><a  href="../After login/homee.php" class="all">Home</a></li>
  <li><a href="../After login/product.php" class="all">products</a></li>
  <li><a href="./Orders.php" class="all">Orders</a></li>
  <li><a href="#contact" class="all">Contact</a></li>

  <div class="regi-shoplogo">
     <li><div>
      <a  class="loginName" href="#profile"> 
     &nbsp;&nbsp; <ion-icon name="person-add-outline"></ion-icon> 
     
       <?php echo $_SESSION["username"] ?> &nbsp;&nbsp;
    </a> 
  </div></li>

  <div class="shop-logo">
  <li><div class="login">
    <input type="text" class="textbox1" value="0" readonly>
    <ion-icon name="cart-outline" class="loginicon"></ion-icon></div></li>
  
    </div>
  <div>
    <li style="float:right"><a href="../login&registration/Login.php" class="logout">Logout</a></li> 
  </div>
  </div>

</ul>   
</form>

<div class="MGlogowhite" align="center"><div class="MGlogo"></div></div>