<?php 

require_once __DIR__ . '/../../../MySQL_11/vendor/db.php';
    
$id = $_POST["id"];
$name = $_POST["name"];
$description = $_POST["description"];
// $category_id = $_POST["category_id"];
$price = $_POST["price"];

$update = mysqli_query($db, "UPDATE `products` SET `name` = '$name', `description` = '$description', 'price' = '$price' WHERE `products`.`id` = '$id'");

if(!$update){
    die("Error update products");
}
die("Products is succefully update");
