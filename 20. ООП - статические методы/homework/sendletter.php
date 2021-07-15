<?php 
// все это до if должно быть записано, иначе ошибка
$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];
$proffesion = $_POST["proffesion"];
$register_time = $_POST["register_time"];

$register_time = date('Y-m-d H:i:s');//только так заработала цель 1

$content = "\nЕсімі: $name\nЭлек.адрес: $email\nЖасы: $age жыл\nПрофессия: $proffesion\nТіркелген уақыты: $register_time\n";
// \n обозначает перенос строки
$filename = "tableWorkers.txt";

// FILE_APPEND добавляет в файл текст один за другим из формы и цель 2 заработал
file_put_contents($filename, $content, FILE_APPEND);
// $what = fopen($filename, "w");
// fwrite($what, $content);
// fclose($what);

if(!file_put_contents){
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
