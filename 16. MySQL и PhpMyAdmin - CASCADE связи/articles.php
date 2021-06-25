<?php 

require_once __DIR__ . '/../MySQL_11/vendor/db.php';

$id = $_GET["id"];
$article = mysqli_query($db, "SELECT * FROM `article` WHERE `id` = '$id'");
$article = mysqli_fetch_assoc($article);//assoc это доступ к 1 ключу


?>

<h1><?= $article["title"] ?></h1>

<p>
    <?= $article["body"] ?>
</p>

<p>
    <i><?= $article["date"] ?></i>    
</p>

<ul>
    <?php
        $comments = mysqli_query($db, "SELECT * FROM `comments` WHERE `post_id` = '$id'");
        //так как у нас может быть много коментариев пишем
        $forcomments = mysqli_fetch_all($comments);

        foreach($forcomments as $forcomment){
            ?>

        <li><?= $forcomment['1'] ?></li>
        
        <?php 
        
        }
    
    ?>
</ul>