<?php
require_once("vendor/autoload.php");


$cal = new Class\Calculator();
$int = 5;
$add = $cal->add($int, $int);
$sub = $cal->subtract($int, $int);

echo "C'est une calculatrice, qui ne fait rien... <br>";
echo sprintf("%d + %d = %d \r \n", $int, $int, $add);
echo "<br>";
echo sprintf("%d - %d = %d", $int, $int, $sub);
