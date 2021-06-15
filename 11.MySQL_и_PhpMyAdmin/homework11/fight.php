<?php 

require "hw11.php";

$name = $_POST["name"];
$desc = $_POST["description"];
$select = $_POST["category_id"];
$prize = $_POST["price"];


$quick = mysqli_query($db, "INSERT INTO `products`(`id`, `nameы`, `description`, `category_id`, `price`) VALUES (NULL, '$name', '$desc', '$select', '$prize')");

if(!$quick) {
    // echo "Error add new articles";die;
    die("Error: " . $quick . "<br>" . mysqli_error($db));
}
die("Success!!");