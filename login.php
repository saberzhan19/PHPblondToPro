<?php 
session_start();
// стираница авторизаций
$login = $_POST["login"];
$password = $_POST["password"];

// здесь дана страница с пользователями, оттуда черпаем
$users = include "users.php";

foreach ($users as $user) {
    //если логин и пароль совподает с тем, что мы отправили с формой, то это озночает, что мы авторезировались
    if($user["login"] == $login && $user["password"] == $password) {
        
        $_SESSION["name"] = $user["name"];//используеться в ceccий и в перед ней нужно написать session_start(), в осталнем они одинаковы

        // setcookie("name", $user["name"]);// используеться в куки

        //после того, как мы авторезировались, делаем переадресацию
        header("Location: profile.php");
        break;
    }
}

// Все это было практика с куки, простота в использований, но все равно рекомендуют использовать сессий