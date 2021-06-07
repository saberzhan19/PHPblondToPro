<?php 


$name = $_POST["name"];
$desc = $_POST["desc"];
$select = $_POST["select"];
$prize = $_POST["prize"];

$content = "Название товара: $name\nОписание: $desc\nКатегория товара: $select\nЦена: $prize\n";
$filename = "products.txt";

$what = fopen($filename, "w");
fwrite($what, $content);
fclose($what);