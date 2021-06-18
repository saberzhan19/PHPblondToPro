<?php 

require_once __DIR__ . '/../../MySQL_11/vendor/db.php';

$id = $_GET["id"];
$article = mysqli_query($db, "SELECT * FROM `products` WHERE `id` = '$id'");
$article = mysqli_fetch_assoc($article);

?>

<h1><?= $article["name"] ?></h1>

<p>
    <?= $article["description"] ?>
</p>

<p>
    <i><?= $article["category_id"] ?></i>    
</p>
<p>
    <i><?= $article["price"] ?></i>    
</p>