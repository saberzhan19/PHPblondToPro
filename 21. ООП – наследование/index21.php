<?php 

require_once "car.php";

$car = new audi('Lada', 2021, 160);

echo '<pre>';
// var_dump($car->getTax());
// var_dump($car->test()); -1-
print_r($car->info());
echo '</pre>';
