<?php 

require_once __DIR__ . '/../MySQL_11/vendor/db.php';

$id = $_GET["id"];
$article = mysqli_query($db, "SELECT * FROM `article` WHERE `id` = '$id'");
$article = mysqli_fetch_assoc($article);//assoc это доступ к 1 ключу

// echo '<pre>';
//     print_r($article);
// echo '</pre>';

?>

<h1><?= $article["title"] ?></h1>

<p>
    <?= $article["body"] ?>
</p>

<p>
    <i><?= $article["date"] ?></i>    
</p>