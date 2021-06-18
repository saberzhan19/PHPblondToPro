<?php 

require_once __DIR__ . '/../../MySQL_11/vendor/db.php';

    $article = mysqli_query($db, "SELECT * FROM `products`");
        $all = mysqli_fetch_all($article);

        foreach ($all as $alls) {
    

?>

<table>
    <tr>
        <th>ID</th>
        <th>Название товара</th>
        <th>Цена</th>
    </tr>
    <tr>
        <td><?= $alls[0] ?></td>
        <td><?= $alls[1] ?></td>
        <td><?= $alls[4] ?></td>
        
        <td><a href="hwasart.php?id=<?= $alls[0] ?>">Посмотреть описание товара</a></td>
        <!-- Ниже будет дан как изменить пост -->
        <td><a href="/../14.Обновление данных в таблице/article_edit.php?id=<?= $alls[0] ?>">Изменить описание товара</a></td>
    </tr>
</table>

<?php

    }

/* echo '<pre>';
    print_r($all);
echo '</pre>'; */

?>    
