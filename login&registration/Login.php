<?php
   require_once 'header.php'
?>

<form action="./includes/login.in.php" method="post">
<div class="MGloginForm">

    <div class="MGloginItems">
            <a href="./homee.php" class="close">x</a>
            <label class="labelLogin">LOGIN</label></br></br></br>

            <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "wronglogin2"){
                    echo '<p class="loginerror">Invalid Password</p>';
                }
                else if($_GET["error"] == "wronglogin1"){
                    echo '<p class="loginerror">Invalid Email / Password</p>';
                }
                    
            }
            ?>
       
            <label class="label1">User Eamil</label></br>
            <input type="email" class="nameText" name="email" placeholder="enter your Email"></br>
        
            <label class="label2">password</label></br>
            <div class="passwordicon">
            <div><input type="password" id="myInput" class="passwordText" name="password" placeholder="enter your password"></div>
            <div><span class="icon-eye" onclick="myfunction()"><ion-icon name="eye-off-outline" id="hide1"></ion-icon>
                                           <ion-icon name="eye-outline" class="icon-eyehide2" id="hide2"></ion-icon></span></div>
                                           </div>
            </br>
            <button class="MGloginbutton" name="submit">Login</button></br> 
        <label class="dhaaLogin">Don't have an account?<a href="./Registration.php">Registration</a></label>
    </div>
    <div class="MGloginLogoRectangle">
    <div class="MGloginLogo"></div></div>
   
</div>
</form>

<?php
   require_once 'footer.php';
?>