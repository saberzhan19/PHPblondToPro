<?php 

require_once __DIR__ . '/../MySQL_11/vendor/db.php';

$id = $_GET["id"];

$delete = mysqli_query($db, "DELETE FROM `article` WHERE `article`.`id` = '$id'");

if(!$delete) {
    die("Error delete article");
}
die("Article is deleted!");