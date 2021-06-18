<?php 

require_once __DIR__ . '/../MySQL_11/vendor/db.php';

$id = $_GET["id"];
$article = mysqli_query($db, "SELECT * FROM `article` WHERE `id` = '$id'");
$article = mysqli_fetch_assoc($article);

?>

<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?= $article["id"] ?>"></input>
    <p>Title of article</p>
    <input type="text" name="title" value="<?= $article["title"] ?>">
    <p>Body of article</p>
    <textarea name="body"><?= $article["body"] ?></textarea><br><br>
    <button type="submit">Save changes</button>
</form>

