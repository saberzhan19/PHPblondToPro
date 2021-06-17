
<table>
    <tr>
        <th>ID</th>
        <th>Загаловок</th>
        <th>Дата публикаций</th>
    </tr>

    <?php

        require_once __DIR__ . '/../MySQL_11/vendor/db.php';//это единственная команда, к-я сработала. То есть сумел подсоединить из другой папки

        $article = mysqli_query($db, "SELECT * FROM `article`");
        $all = mysqli_fetch_all($article);

        foreach ($all as $alls) {
    ?>
    <tr>
    <!-- Вот такая запись <?= $alls[0] ?> такая же как <?php echo ($alls[0]) ?> -->
        <td><?= $alls[0] ?></td>
        <td><?= $alls[1] ?></td>
        <td><?= $alls[3] ?></td>
        <td><a href="article.php?id=<?= $alls[0] ?>">Открыть статью</a></td>
    </tr>
    
    <?php

}

/* echo '<pre>';
    print_r($all);
echo '</pre>'; */

?>    
    
</table>

<form action="vendor/create.php" method="post">
<p>Title of article</p>
<input type="text" name="title">
<p>Body of article</p>
<textarea name="body"></textarea><br><br>
<button type="submit">Send article</button>
</form>