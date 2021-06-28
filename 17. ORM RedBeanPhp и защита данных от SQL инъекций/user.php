<?php 

include_once __DIR__ ."/../includes/db.php";// это библиютека помогает взаимодействовать с БД

$id = $_GET["id"];

//помещаем пользователя из БД ниже
// $user = R::load(таблица, что будем искать); это формула
$user = R::load('users', $id); 

// ставим блок если user нету
if($user["name"] === NULL) {
    echo '<h1>404 Пользователь не найден</h1>';
    die();
}

?>
<h1>Привет, <?= $user["name"] ?></h1>
<h3>Логин: <?= $user["login"] ?></h3>
<h4>Email: <?= $user["email"] ?></h4>