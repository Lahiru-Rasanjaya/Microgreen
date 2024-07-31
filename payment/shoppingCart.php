<?php
   require_once 'header.php'
?>

<!-- number pannel -->
<form action="ShippingAndPayment.php"method="POST">
<section class="allItems">
    <div class="rec1"></div>
    <div class="num1">
        <label class="number1">1</label>
        <label class="word1">Shopping cart</label>
    </div>
    <div class="rec2"></div>
    <div class="num2">
        <label class="number2">2</label>
        <label class="word2">Shipping and Payment</label>
    </div>
    <div class="rec3"></div>
    <div class="num3">
        <label class="number3">3</label>
        <label class="word3">Confirmation</label>
    </div>
    <div class="rec4"></div>
</section>

<!-- image and payment  -->
<section class="image-table">

    <div class="image-Details">
        <img src="shoppingCart.png" alt="product-image">
        <p class="para">Durable indoor micro garden</p>
        <div class="price-value">
        <label class="price">200$(20%)</label>
        <div class="price-Continuity">
             <button class="min"> - </button>
             <label class="value"> 1 </label>
             <button class="max"> + </button>
        </div>
        </div>
    </div>

    <div class="price-table">         
        <div class="four-types">
            <label>Subtotal</label>
            <div class="line"></div>
            <label>200$</label>
        </div>
        <div class="four-types">
            <label>Weight</label>
            <div class="line"></div>
            <label>1.5kg</label>
        </div>
        <div class="four-types">
            <label>Shipping</label>
            <div class="line"></div>
            <label>5.80$</label>
        </div>
        <div class="four-types">
            <label>Total</label>
            <div class="line"></div>
            <label>205.80$</label>
        </div>
    </div>

</section>

<section class="continue-button buttonBottom">
      <button><ion-icon name="lock-closed-outline" class="lockicon">
      </ion-icon>Continue</button>
</section>


</form>
<?php
   require_once 'footer.php'
?>