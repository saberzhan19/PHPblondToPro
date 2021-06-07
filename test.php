<?php 

// $name = "Asema";
// $age = 25;

// echo '<pre>';
//     print_r($_POST);
// echo '</pre>';

//ниже дан пример, как отправить и сохранить данные в сторонний файл
$name = $_POST["name"];
$surname = $_POST["surname"];
$age = $_POST["age"];

$content = "Имя: $name\nФамилия: $surname\nВозраст: $age\n";
$filename = "prof.txt";

$fp = fopen($filename, "w");
fwrite($fp, $content);
fclose($fp);

