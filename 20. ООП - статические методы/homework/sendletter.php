<?php 
// все это до if должно быть записано, иначе ошибка
$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];
$proffesion = $_POST["proffesion"];

$content = "Имя: $name\nЭлек.адрес: $email\nВозраст: $age года\nПрофессия: $proffesion\n";

$filename = "tableWorkers.txt";

$what = fopen($filename, "w");
fwrite($what, $content);
fclose($what);

if(!$what){
    echo "Что-то не так!";
} else{
    echo "Отправили!";
}
?>

<br>
<br>
<button onclick="location.href='indexhw20.php'">FacePage</button>
<button onclick="location.href='/../'">Main</button>
<!-- <a href="./">Back to main</a> -->
