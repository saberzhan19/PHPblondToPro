<?php 

require_once __DIR__ . '/../../MySQL_11/vendor/db.php';

    $articles = mysqli_query($db, "SELECT * FROM `products`");
        $all = mysqli_fetch_all($articles);

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
        <td><a href="hwart_edit.php?id=<?= $alls[0] ?>">Изменить описание товара</a></td>
        <td><a href="hw_delete.php?id=<?= $alls[0] ?>">Удалить товара</a></td>
    </tr>
</table>

<?php

    }

/* echo '<pre>';
    print_r($all);
echo '</pre>'; */

?>    

<form action="hw_create.php" method="post">
    <input type="hidden" name="id"></input>
    <p>Title of products</p>
    <input type="text" name="call"></input>
    <p>Full description</p>
    <input type="text" name="description" >
    <p>Type of products</p>
    <textarea name="category_id"></textarea>
    <p>Price</p>
    <input type="text" name="price"></input><br><br>
    <button type="submit">Save changes</button>
</form>
