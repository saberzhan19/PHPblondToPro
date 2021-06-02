<?php 

// $название_переменной = значение;
/* 
$name = "Dama";
echo $name; */

// $string = "Dama likes";//тип данных строка
// var_dump($string);

$name = "Dama";
$as = "Samal";
$age = 30;
// echo "Я видел эту $as(любая переменная) раньше"; 

//можно и так

// echo 'Я видел эту \'' . $as .  '\' и ей ' . $age . ' лет ';//используется конкатинация(склейвание строк с переменной)
// обратный слэш называеться \ называеться экранирование, оно берет в кавычки слово

//константы это постоянные значения, сверху были примеры переменных

/* define('NAME', 'SAMAL');
echo NAME; */

//пример использование константы
/* define('PORT', 3036);
define('DB_LOGIN', 'root');
define('DB_PASSWORD', '123456');
//можно и так
const DB_PASS = 'root'; */


// echo "Логин - " . DB_LOGIN . "Пароль - " . DB_PASSWORD; 
//Домашнее задание ниже
/* $name = 'Saberzhan';
const GREETING = 'Здравствуйте, ' ;

echo GREETING . $name; */

// *Глава Массивы*
// формула
// $название_массива = array(значение1, значение2); 

/* $names = array('Dana', 'Samal', 'Asema');

// echo $names[1];
// echo '<pre>'; перенос строки!
echo '<pre>';
    var_dump($names);
echo '</pre>';
 */

// $names = ['Dana', 'Samal', 'Asema'];
/* echo '<pre>';
    print_r($names[2]);
    //print_r($names);
echo '</pre>';
 */
//так выбираем из  
// $names[1] = 'Dina';
// так добавляем в список пользователя
// $names[] = 'Riza';

/* echo '<pre>';
print_r($names);
echo '</pre>';
 */

//  var_dump(in_array-в массиве(кого ищем, где ищем));
//  var_dump(in_array("Asema", $names));

/* if(in_array("Asema", $names)=== true){
    echo "Нашли";
} else{
    echo "Не найден";
 }*/
//удалить массив из списка
/* unset($names[2]);
echo '<pre>';
    print_r($names);
echo '</pre>';
 */
//ассоциативные массивы
$user = [
    "name" => 'Kimbat',
    "surname" => 'Attila',
    "age" => '27',
    "skill" => 'php, js'
];

//ниже приведены массивы из ассоциативных массивчиков
$users = [
    [
        "name" => 'Kimbat',
        "surname" => 'Attila',
        "age" => '27',
        "skill" => 'php, js'
    ],
    [
        "name" => 'Samal',
        "surname" => 'Attila',
        "age" => '27',
        "skill" => 'php, js'
    ],
    [
        "name" => 'Dina',
        "surname" => 'Attila',
        "age" => '27',
        "skill" => 'php, js'
    ]

];

$post = [
    [
        "id" => 1,
        "title" => "lorem",
        "body" => "big"
    ],
    [
        "id" => 2,
        "title" => "lorem",
        "body" => "medium"
    ],
    [
        "id" => 3,
        "title" => "lorem",
        "body" => "small"
    ]
];

$config = [
    "URL" => 123,
    "DB_LOGIN" => "root"
];

/* echo '<pre>';
print_r($user);
echo '</pre>';
 */
//только так сработал перенос строки добавив pre and "\n" .
/* echo '<pre>';
    print_r('Samal - ' . $user["age"] . "\n" . 'phone -' . $config["URL"]);
echo '</pre>';  */

/* echo '<pre>';
    print_r($users[1]["skill"]);
echo '</pre>'; */

    
// ***04. Условия, тернарный оператор и switch***

/* if(условия){
    то, что должно произойти
} */

// $age = 36;
// $country = "Kazakh";
// === проверяет тип, == закрывает глаза строка или число, а === условие не пройдет
// && - и, || - или

/* if($age >= 18 && $age <= 40){//как читаеться, если возрасть больше или равно 18 и возраст меньше или равно 40
    echo 'Вам есть 18 + лет';
} else {
    echo 'Вам нам не подходите';
} */

/* if(($age >= 18 && $age <= 40) || $country == "USA"){
    echo 'Вы нам подходите';
} elseif ($age < 18 && $country == "Kazakh")
    echo 'Вы подходите в казахстанский филиал';
else {
    echo 'Ого, вы нам не подходите';
}  */

// $mood = "bad";
/* 
if($mood == "bad") {
    echo "Все хорошо, выше нос!";
} elseif ($mood == "fine"){
    echo "Отлично, продолжай в том же духе!";
} elseif ($mood == "so so"){
    echo "Кажется я знаю, что поднимет тебе настроение!";
} else {
    echo "Я не могу понять какое у тебя настроение...";
} */

// или можно применить switch 

/* switch ($mood) {// в switch заносим значение которое хотим проверять
    case "bad";
        echo "Все хорошо, выше нос!";
        break;//останавлевает
    case "so so";
        echo "Кажется я знаю, что поднимет тебе настроение!";
        break;
    case "fine";
        echo "Отлично, продолжай в том же духе!";
        break;
    default:
        echo "Я не могу понять какое у тебя настроение...";
        break;

} */

$names = ["Samal", "Dina", "Asema"];
$find = "Asema";

//тернарный оператор 
$result = (in_array($find, $names) == true) ? "Пользователь успешно найден!" : "Пользователь не найден!";
// для сравнения либо тернарный оператор(как-то проще), либо условия со значениями внизу if, else(для наглядности)
// var_dump(in_array($find, $names))

/* if (in_array($find, $names) == true){
    $result = "Пользователь успешно найден!";
} else {
    $result = "Пользователь не найден!";
} */

echo $result;



?>