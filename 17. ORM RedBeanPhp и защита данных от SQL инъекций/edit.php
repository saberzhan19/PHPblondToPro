<?php

    include_once __DIR__ ."/../includes/db.php";

    $id = $_GET["id"];

    $user = R::load('users', $id);
    // $user = R::load('users', $_GET["id"]);//можно и так

?>


<form action="/includes/save17.php" method="post">
    <input type="hidden" name="id" value="<?= $user["id"]?>">
    <p>name</p>
    <input type="text" name="name" value="<?= $user["name"]?>">
    <p>login</p>
    <input type="text" name="login" value="<?= $user["login"]?>">
    <p>email</p>
    <input type="email" name="email" value="<?= $user["email"]?>">
    <p>password</p>
    <input type="password" name="password" value="<?= $user["password"]?>">
    <br>
    <br>
    <button type="submit">Save new user</button>
    <br>
    <br>
    <button><a href="./">Back</a></button>

</form>