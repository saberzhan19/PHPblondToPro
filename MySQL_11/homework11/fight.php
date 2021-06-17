<?php 

require_once __DIR__ . '/../MySQL_11/vendor/db.php';

$name = $_POST["name"];
$desc = $_POST["description"];
$select = $_POST["category_id"];
$prize = $_POST["price"];


$quick = mysqli_query($db, "INSERT INTO `products`(`id`, `name`, `description`, `category_id`, `price`) VALUES (NULL, '$name', '$desc', '$select', '$prize')");

if(!$quick) {
    // echo "Error add new articles";die;
    die("Error: " . $quick . "<br>" . mysqli_error($db));
}
die("Success!!");