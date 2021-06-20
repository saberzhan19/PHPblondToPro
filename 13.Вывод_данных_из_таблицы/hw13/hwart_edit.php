<?php 

require_once __DIR__ . '/../../MySQL_11/vendor/db.php';

$id = $_GET["id"];   
$article = mysqli_query($db, "SELECT * FROM `products` WHERE `id` = '$id'");
$article = mysqli_fetch_assoc($article);

?>

<form action="unknow/hwupdate.php" method="post">
    <input type="hidden" name="id" value="<?= $article["id"] ?>"></input>
    <p>Title of products</p>
    <input type="text" name="name" value="<?= $article["name"] ?>"></input>
    <p>Full description</p>
    <input type="text" name="description" value="<?= $article["description"] ?>">
    <!-- <p>Type of products</p>
    <textarea name="category_id"><?= $article["category_id"] ?></textarea> -->
    <p>Price</p>
    <input type="text" name="price" value="<?= $article["price"] ?>"></input><br><br>
    <button type="submit">Save changes</button>
</form>