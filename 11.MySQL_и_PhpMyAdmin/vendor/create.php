<?php 

require "db.php";

$title = $_POST["title"];
$body = $_POST["body"];
$date = date("Y-m-d");

// mysqli_query(с какой базой данных будем работать, записываем скюл запрос)

// mysqli_query($db, "INSERT INTO `article`(`id`, `title`, `body`, `date`) VALUES (NULL, '$title', '$body', '$date')");

// можно сделать небольшую проверку mysqli_query, тоесть сверху код короче
$quick = mysqli_query($db, "INSERT INTO article(id, title, body, date) VALUES (NULL, '$title', '$body', '$date')");

if (!$quick) {
    die("Error add new article");
}
die("Success!!");
