<?php 

require_once __DIR__ . '/../../MySQL_11/vendor/db.php';

$id = $_POST["id"];
$name = $_POST["name"];
$description = $_POST["description"];
$category_id = $_POST["category_id"];

$update = mysqli_query($db, "UPDATE `article` SET `name` = '$name', `description` = '$description', 'category_id' = '$category_id' WHERE `article`.`id` = '$id'");

if(!$update){
    die("Error update article");
}
die("Article is succefully update");