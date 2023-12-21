<?php

session_start();

if(isset($_SESSION['lastUserId'])){
    echo '<li><a class="nav-link" href="#">'.$_SESSION["login"].'</a></li>';
    echo '<li><a class="nav-link" href="cart.html"><img src="images/cart.svg"></a></li>';
    echo '<div><a class="nav-link exit-button" onclick="ExitButtonClick()"><img src="images/exit.png"></a></div>';
}
else{
    echo '<li><a class="nav-link" href="customer_login.html"><img src="images/user.svg"></a></li>';
    echo '<li><a class="nav-link" href="cart.html"><img src="images/cart.svg"></a></li>';
}
?>
