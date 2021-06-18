<?php 

require_once __DIR__ . '/../MySQL_11/vendor/db.php';

$id = $_POST["id"];
$title = $_POST["title"];
$body = $_POST["body"];

$update = mysqli_query($db, "UPDATE `article` SET `title` = '$title', `body` = '$body' WHERE `article`.`id` = '$id'");

if(!$update){
    die("Error update article");
}
die("Article is succefully update");