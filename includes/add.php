<?php 

error_reporting(E_ALL);

include_once "db.php";

$name = $_POST["name"];
$login = $_POST["login"];
$email = $_POST["email"];
$password = $_POST["password"];

$user = R::dispense('users');//обращение к таблице в БД

$user["name"] = $name;
$user["login"] = $login;
$user["email"] = $email;
$user["password"] = $password;

R::store($user);//сохраняем сделанное

header('Location: /17. ORM RedBeanPhp и защита данных от SQL инъекций/index.php');

// Все это добавление пользователя в БД 17 папке 2 файла php и в includes db,rb.php
// Это все сокращенно благодаря RedBean php
