<?php 

require_once __DIR__ . '/../../MySQL_11/vendor/db.php';


$id = $_POST["id"];
// $name = $_POST["name"];//почему то с ним не кто не хочет работать, писал внизу в скобках($quick), везде не работает, пришлось поменять на $call
$call = $_POST["call"];
$description = $_POST["description"];
$category_id = $_POST["category_id"];
$price = $_POST["price"];


$quicks = mysqli_query($db, "INSERT INTO `products` (`id`, `call`, `description`, `category_id`, `price`) VALUES (NULL, '$call', '$description', '$category_id', '$price')");

if (!$quicks) {
    die("Error add new article");
}
die("Success!!");
