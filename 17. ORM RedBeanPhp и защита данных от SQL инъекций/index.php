<?php 
// это 2 действие

include_once __DIR__ ."/../includes/db.php";// это библиютека помогает взаимодействовать с БД


// как получить пользователей всех из БД
$users = R::findAll('users');
// $user = R::dispense('users');//это обращение к определенной таблице

// $user["name"] = "Ivan";
// $user["login"] = "ivan432";
// когда добавляем название больше заданной в таблице RedBean php меняет структуру таблицы в типе(напр: там varchar, вы написали текст длинный текст, и она меняет ее на надлижаший тип, внизу написано)
// $user["email"] = "ivan@localhostivan@localhostivan@localhostivan@localhostivan@localhostivan@localhostivan@localhostivan@localhostivan@localhostivan@localhostivan@localhostivan@localhostivan@localhostivan@localhostivan@localhostivan@localhostivan@localhostivan@localhost";
// $user["password"] = "1234";

// R::store($user);
?>

<form action="/includes/add.php" method="post">
    <p>name</p>
    <input type="text" name="name">
    <p>login</p>
    <input type="text" name="login">
    <p>email</p>
    <input type="email" name="email">
    <p>password</p>
    <input type="password" name="password">
    <br>
    <br>
    <button type="submit">Add new user</button>
</form>

<!-- ниже как получать данные из БД, это 2 действие -->
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>login</th>
        <th>email</th>
    </tr>

    <?php 

    foreach ($users as $user) {
        ?>
    <tr>
        <td><?= $user["id"]?></td>
        <td><?= $user["name"]?></td>
         <td><?= $user["login"]?></td>
        <td><?= $user["email"]?></td>
        <!-- ниже дан пример как найти пользователя по id -->
        <td><a href="user.php?id=<?= $user["id"]?>">Открыть</a></td>
    </tr>
        <?php
    }
    ?>
   <!--  <tr>
        <td>1</td>
        <td>Samal</td>
        <td>samal1</td>
        <td>samal@mail.ru</td>
    </tr> -->
</table>

<style>
    th {
        background: grey;
    }
    td {
        background: yellow;

    }
</style>