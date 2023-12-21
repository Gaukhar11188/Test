<form method = "post" enctype="multipart/form-data">
    <input type = "file" name = "fname">
    <input type = "submit" value = "sub">
</form>

<?php
echo $_FILES["fname"]["name"];

$str = "lesson_09/newdir";
mkdir($str);
?>