<?php 

require_once __DIR__ . '/../../MySQL_11/vendor/db.php';


$id = $_POST["id"];
$call = $_POST["call"];
$description = $_POST["description"];
$category_id = $_POST["category_id"];
$price = $_POST["price"];

$updates = mysqli_query($db, "UPDATE `products` SET `description` = '$description', `category_id` = '$category_id', `price` = '$price' WHERE `products`.`id` = '$id'");

if(!$updates){
    die("Error update products");
}
die("Products is succefully update");
