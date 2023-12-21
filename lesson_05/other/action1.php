<?php
if(isset($_POST["submit"]) && $_POST["user"] != "" && $_POST["password"] != "")
{
    echo $_POST["submit"].'</br>';
    echo 'You are welcome, '.$_POST["user"].
    '! Your password is '.$_POST["password"].'</br>';
}
else
{
    echo 'No data were received</br>';
}

?>