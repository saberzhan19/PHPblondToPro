<?php 

require_once "audi.php";

// echo audi::getPrice('Lexus', '2021', '200');

//затемнил для показа статистического метода
// $machine = new audi('Lexus', '2021', '200');
// обращение статическому методу через :: 
// echo $machine::staticMethod();

// $machine->show();//это обычный объектный метод

// echo "<br><br>";

// echo $machine->getPrice();

/* $object = new audi();

$object::$sms = "Some text!";
echo $object::showSms(); */

// можно упрощенно
audi::$sms = "Some text!";
echo audi::showSms();
