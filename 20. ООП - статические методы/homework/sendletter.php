<?php 

$name = $_POST["name"];

$content = "Имя: $name\nЭлек.адрес: $email\nВозраст: $age\nПрофессия: $proffesion\n";

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
<a href="./">Back to main</a>
