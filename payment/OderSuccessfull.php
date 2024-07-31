<?php
  require_once "header.php";
?>

<!-- number pannel -->
<form action="./Orders.php"method="POST">
    
<section class="allItems">
    <div class="rec1"></div>
    <div class="num1">
        <label class="number1">1</label>
        <label class="word1">Shopping cart</label>
    </div>
    <div class="rec2 rec2colour"></div>
    <div class="num2">
        <label class="number2">2</label>
        <label class="word2">Shipping and Payment</label>
    </div>
    <div class="rec3 rec3colour"></div>
    <div class="num3">
        <label class="number3">3</label>
        <label class="word3">Confirmation</label>
    </div>
    <div class="rec4 rec4color"></div>
</section>

<!-- successfull message and other details -->
<div class="successfill-Massge">
    <label class="msg">Your order is successful</label>
</div>
<section class="image-topic messageleft">
    <div>
        <img src="shoppingCart.png" alt="product-image">
   </div>
    <div class="productNamePrice">
        <label class="oderPrice">205.80$</label>
        <label class="oderName">Durable indoor micro garden  X 1</label>
    </div>
</section>

<section class="ProductViewing-button">
      <button type="submit">Product viewing</button>
</section>

</form>

<?php

$file = fopen('Order.txt','a');
fwrite($file,strtoupper($_POST['cFName']));
fwrite($file," ");
fwrite($file,strtoupper($_POST['cLName']));
fwrite($file,"  ");
fwrite($file,($_POST['cPostcode']));
fwrite($file,"  ");
fwrite($file,($_POST['ctelephone']));
fwrite($file,"  ");
fwrite($file,($_POST['cEmail']));
fwrite($file,"          ");
fclose($file)


?>

<?php
  require_once "footer.php"
?>