<?php
//include_once("LESSON_4.php");
require_once("Lesson_4.php");
$a = 5;
$b = 3;
$c = array(1, 2, 3, 4);
$res2 = _subs($a, $b);
$res3 = _mult($a, $b);
$res4 = _mult($c);
$res5 = _div($a, $b);
$res6 = _randgen($a, $b);
echo "Результат вычитания чисел ".$a." и ".$b." = ".$res2."</br>";
echo "Результат умножения чисел ".$a." и ".$b." = ".$res3."</br>";
echo "Результат умножения масcива = ".$res4."</br>";
echo "Результат деления чисел ".$a." и ".$b." = ".$res5."</br>";
echo "Рэндомное число: ".$res6."</br>";

?>