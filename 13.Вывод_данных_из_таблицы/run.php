
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
        <!-- Ниже будет дан как изменить пост -->
        <td><a href="/../14.Обновление данных в таблице/article_edit.php?id=<?= $alls[0] ?>">Изменить статью</a></td>
        <!-- Ниже будет дан как удалить пост -->
        <td><a href="/../15.Удаление данных из таблицы/article_delete.php?id=<?= $alls[0] ?>">Удалить статью</a></td>
        <!-- Добавить коментарий -->
        <td><a href="/../16. MySQL и PhpMyAdmin - CASCADE связи/comment_add.php?id=<?$alls[0] ?>">Добавить коментарий</a></td>

    </tr>
    
    <?php

}

/* echo '<pre>';
    print_r($all);
echo '</pre>'; */

?>    
    
</table>

<form action="/../MySQL_11/vendor/create.php" method="post">
    <p>Title of article</p>
    <input type="text" name="title">
    <p>Body of article</p>
    <textarea name="body"></textarea><br><br>
    <button type="submit">Send article</button>
</form>
