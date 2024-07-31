<?php
   require_once 'header.php'
?>

<form action="./includes/register.in.php" method="post">
<div class="MGregistrationForm">
    <div class="MGregistrationItems">
            <a href="./homee.php" class="close">x</a>

    <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                    echo '<p class="Rloginerror">Empty Inputs</p>';
                }
                else if($_GET["error"] == "invalidEmail"){
                    echo '<p class="Rloginerror">Invalid Email </p>';
                }
                else if($_GET["error"] == "passwordsdontmatch"){
                    echo '<p class="Rloginerror"> Password not Match</p>';
                }
                else if($_GET["error"] == "userEmail"){
                    echo '<p class="Rloginerror">Please Enter Your Email</p>';
                }
                      
            }
            ?>

             
            <label class="label1">User Name</label></br>
            <input type="text" class="nameText" name="name" placeholder="enter your name"></br>

            <label class="label1">Email</label></br>
            <input type="text" class="nameText" name="email" placeholder="enter your Email"></br>
         
            <label class="label2">Password</label></br>
            <div class="passowrdicon1">
            <div><input type="password" id="myInput1" class="passwordText sapcepassword" name="password" placeholder="create password"></div>
            <div class="icons"><span class="icon-eye" onclick="myfunction1()"><ion-icon name="eye-off-outline" id="hide3"></ion-icon>
            <ion-icon name="eye-outline" class="icon-eyehide2" id="hide4"></ion-icon></span></div>
            </div>
                 </br>

            <label class="label3">Confirm Password</label></br>
            <div class="passowrdicon1">
            <div><input type="password" id="myInput2" class="ConfirmpasswordText" name="REpassword" placeholder="Confirm password"></div>
            <div class="icons1"><span class="icon-eye" onclick="myfunction2()"><ion-icon name="eye-off-outline" id="hide5"></ion-icon>
            <ion-icon name="eye-outline" class="icon-eyehide2" id="hide6"></ion-icon></span></div>
            </div>
                 </br>
      
            <button class="MGregistrationbutton" name="submit">Registration</button></br> 
        <label class="dhaaRegistration">Do have an account?<a href="./Login.php">Login</a></label>
    </div>
    <div class="MGregistrationRectangle">
    <div class="MGregistration"></div></div>
</div>
</form>

<?php
   require_once 'footer.php';
?>