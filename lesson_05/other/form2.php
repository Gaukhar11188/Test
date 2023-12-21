<?php
if(!isset($_POST["submit"]))
{
?>

<form action = "form2.php" method = "POST">
    <p><input placeholder = "Username" name = "user" type = "text">
    </input></p>
    <p><input placeholder = "Password" name = "password" type = "password">
    </input></p>
    <p><input type="submit" name="submit" value="login"></p>
</form>

<?php
}
else
{
    echo 'You are welcome, '.$_POST["user"].
    '! Your password is '.$_POST["password"].'</br>';
}
?>