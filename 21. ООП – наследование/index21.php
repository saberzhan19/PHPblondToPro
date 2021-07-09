<?php 

require_once "car.php";

$car = new audi('Lexus', 2021, 200);

echo '<pre>';
var_dump($car->getTax);
// var_dump($car->test()); -1-
// print_r($car->info());
echo '</pre>';
