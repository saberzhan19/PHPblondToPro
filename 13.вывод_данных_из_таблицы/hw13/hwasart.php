<?php 

require_once __DIR__ . '/../../MySQL_11/vendor/db.php';

$id = $_GET["id"];
$articles = mysqli_query($db, "SELECT * FROM `products` WHERE `id` = '$id'");
$articles = mysqli_fetch_assoc($articles);

?>

<h1><?= $articles["name"] ?></h1>

<p>
    <?= $articles["description"] ?>
</p>

<p>
    <i><?= $articles["category_id"] ?></i>    
</p>
<p>
    <i><?= $articles["price"] ?></i>    
</p>