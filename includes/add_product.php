<?php 

require "vendor/db.php";

$name = $_POST["name"];
$desc = $_POST["description"];
$select = $_POST["category_id"];
$prize = $_POST["price"];


$quick = mysqli_query($db, "INSERT INTO `products`(`id`, `name`, `description`, `category_id`, `price`) VALUES (NULL, '$name', '$desc', '$select', '$prize'])");

if (!$quick) {
    die("Error add new article");
}
die("Success!!");

// внизу код создает файл с данными
/* $content = "Название товара: $name\nОписание: $desc\nКатегория товара: $select\nЦена: $prize\n";

$filename = "products.txt";

$what = fopen($filename, "w");
fwrite($what, $content);
fclose($what);
 */
