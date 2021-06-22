<?php 

require_once __DIR__ . '/../../MySQL_11/vendor/db.php';

$id = $_GET["id"];   
$articles = mysqli_query($db, "SELECT * FROM `products` WHERE `id` = '$id'");
$articles = mysqli_fetch_assoc($articles);

?>

<form action="hwupdate.php" method="post">
    <input type="hidden" name="id" value="<?= $articles["id"] ?>"></input>
    <p>Title of products</p>
    <input type="text" name="name" value="<?= $articles["name"] ?>"></input>
    <p>Full description</p>
    <input type="text" name="description" value="<?= $articles["description"] ?>">
    <p>Type of products</p>
    <textarea name="category_id"><?= $articles["category_id"] ?></textarea>
    <p>Price</p>
    <input type="text" name="price" value="<?= $articles["price"] ?>"></input><br><br>
    <button type="submit">Save changes</button>
</form>