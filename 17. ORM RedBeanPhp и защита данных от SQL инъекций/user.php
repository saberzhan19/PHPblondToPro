<?php 

include_once __DIR__ ."/../includes/db.php";// это библиютека помогает взаимодействовать с БД

// $id = $_GET["id"];//это поиск по ID -1-

$login = $_GET["login"];

//помещаем пользователя из БД ниже
// $user = R::load(таблица, что будем искать); это формула
// $user = R::load('users', $id); //это поиск по ID -1-

$user = R::findOne('users', 'login = ?', [$login]);//'users' это из какой таблицы, а второе что ищем с одним параметром

// $user = R::findOne('users', 'login = ? And email = ?', [$login, "Brazar@gmail.com"]);// а здесь ищем по 2 параметрам

// ставим блок если user нету, R::load не позволяет посмотреть если такой пользователь или нет, например там if(!$user) и тд. И поэтому делаем такую проверку как ниже
if($user["name"] === NULL) {
    echo '<h1>404 Пользователь не найден</h1>';
    die();
}

?>
<h1>Привет, <?= $user["name"] ?></h1>
<h3>Логин: <?= $user["login"] ?></h3>
<h4>Email: <?= $user["email"] ?></h4>
<button><a href="./">Back</a></button>