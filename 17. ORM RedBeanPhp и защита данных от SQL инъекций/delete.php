<?php

    include_once __DIR__ ."/../includes/db.php";

    $id = $_GET["id"];

    $user = R::load('users', $id);

    //для удаления используем функцию 
    R::trash($user);

    //и перенаправляем после удаление
    header('Location: index.php');