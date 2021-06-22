<?php 

require_once __DIR__ . '/../../MySQL_11/vendor/db.php';

$id = $_GET["id"];

$delete = mysqli_query($db, "DELETE FROM `products` WHERE `products`.`id` = '$id'");

if(!$delete) {
    die("Error delete products");
}
die("Article is deleted!");