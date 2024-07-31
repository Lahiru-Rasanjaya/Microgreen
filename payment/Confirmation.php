<?php
   require_once "header.php";
?>

<!-- number pannel -->
<form action="./OderSuccessfull.php"method="POST">
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
    <div class="rec4"></div>
</section>

<!-- textboxs -->
<label class="yourDtails">Your details</label>
<section class="Alltextbox">
    <div class="textbox-Align">
        <div class="lable-textbox">
            <label class="textbox-names">First Name</label>

            <input type="text" class="textbox-design" name="cFName" value="<?php echo strtoupper($_POST['firstName']); ?>" readonly>
        </div>
        <div class="lable-textbox">
            <label class="textbox-names">Last Name</label>
            <input type="text" class="textbox-design" name="cLName" value="<?php echo strtoupper($_POST['lastName']); ?>" readonly>
        </div>
    </div>
    <div class="textbox-Align">
        <div class="lable-textbox">
            <label class="textbox-names">Address</label>
            <input type="text" class="oneTextbox-design" name="Cadress" value="<?php echo strtoupper($_POST['address']); ?>" readonly>
        </div>
    </div>
    <div class="textbox-Align">
        <div class="lable-textbox">
            <label class="textbox-names">Postcode</label>
            <input type="text" class="textbox-design" name="cPostcode" value="<?php echo $_POST['postcode']; ?>" readonly>
        </div>
        <div class="lable-textbox">
            <label class="textbox-names">Telephone</label>
            <input type="text" class="textbox-design" name="ctelephone" value="<?php echo $_POST['telephone']; ?>" readonly>
        </div>
    </div>
    <div class="textbox-Align">
        <div class="lable-textbox">
            <label class="textbox-names">Email</label>
            <input type="email" class="oneTextbox-design" name="cEmail" value="<?php echo $_POST['email']; ?>" readonly>
        </div>
    </div>
</section>

<label class="yourDtails details">Credit card</label>
<section class="CreditCard">
    <div class="card-details">
        <label class="card-para">Please enter your card details:</label>
    </div>
    <div class="card-textboxs">
        <input type="text" class="textbox-design" name="#" value="<?php echo $_POST['cardNo']; ?>" readonly>
        <input type="text" class="textbox-designPIN" name="#" value="<?php echo $_POST['cardM/D']; ?>" readonly>
    </div>
</section>

<label class="yourDtails details">Your Oder</label>
<section class="image-topic">
    <div>
        <img src="shoppingCart.png" alt="product-image">
   </div>
    <div class="productNamePrice">
        <label class="oderPrice">205.80$</label>
        <label class="oderName">Durable indoor micro garden  X 1</label>
    </div>
</section>

<section class="continue-button creditCardButton" name="buynow">
      <button><ion-icon name="lock-closed-outline" class="lockicon">
      </ion-icon>Buy Now</button>
</section>

</form>

<?php
   require_once "footer.php"; 
?>