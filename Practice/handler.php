<?php
// $name = $_POST["name"];
// $names = ["mary", "maria", "marcello", "mark", "max", "mike"];
// $name = strtolower($name);
// $response = "";
// foreach ($names as $n) {
//     if (substr($n, 0, strlen($name)) === $name) {
//         $response .= $n . "<br/>";
//     }
// }
// echo $response;

session_start();
if(!isset($_SESSION['click'])){
    $click = 0;
}
else{
    $click = $_SESSION['click'];

}

$click++;
$_SESSION['click'] = $click;
echo $click;


?>