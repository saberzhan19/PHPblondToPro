<?php 

include_once "db.php";

$id = $_POST["id"];// один вариант
$name = $_POST["name"];
$login = $_POST["login"];
$email = $_POST["email"];
$password = $_POST["password"];

$user = R::load('users', $id);// один вариант
// $user = R::findOne('users', 'login = ?', [$login]);//это с одним пользователем
// $users = R::findAll('users', 'login = ?', [$login]);//это больше одного пользователя

$user["name"] = $name;
$user["login"] = $login;
$user["email"] = $email;
$user["password"] = $password;

//сохраняем все изменения
R::store($user);

//и перенаправляем на страницу
header('Location: /17. ORM RedBeanPhp и защита данных от SQL инъекций/edit.php?id=' . $id);// один вариант