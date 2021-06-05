<?php 

//4 lesson homework

// 1 - задание не понял
/* define('LOGIN', "admin");
define('PASSWORD', "secret123");

$tmp_login = "admi";
$tmp_password = "secret123";

if($tmp_login == 'LOGIN' && $tmp_password >= 'PASSWORD' ) {
    echo «Check correct your password»;
} elseif($tmp_login === LOGIN){
    echo «User not found»;
} elseif($tmp_login == LOGIN && $tmp_password == PASSWORD){
    echo «Auth success»;
} else {
    echo "Noway";
} */

// 2 - получилось, тернарного оператор!
/* $isStatus = ["sa","ray"];//без таких скобок не работает
$as = "sa";

$statusResult = (in_array($as, $isStatus) == true) ? "43224656" : "98645623";

echo $statusResult; */

// 3 - оператора switch, выполнил!

/* $typeCar = "";

switch ($typeCar) {// в switch заносим значение которое хотим проверять
    case "BMW";
        echo "Selected is a very good car";
        break;//останавлевает
    case "Toyota";
        echo "Toyota is a very reliable car!";
        break;
    case "Lada";
        echo "Don't buy these cars!";
        break;
    default:
        echo "Car not found";
        break;
} */

// 5 урок домашнее задание

// $todos = [
//     [
//         "id" => 1,
//         "title" => "Купить столовые приборы",
//         "date" => "03.04.2020",
//         "status" => "Выполнено"
//     ],
//     [
//         "id" => 2,
//         "title" => "Выбросить мусор",
//         "date" => "05.04.2020",
//         "status" => "Ожидается"
//     ],
//     [
//         "id" => 3,
//         "title" => "Помыть машину",
//         "date" => "10.04.2020",
//         "status" => "Ожидается"
//     ]
// ];

//  //одна банда
// $ct = 0;

// foreach ($todos as $todo) {

//     //одна банда
//     if ($ct == 1) {
//         break;
//     }

//     // здесь вроде как продолжайте все, кроме того, где есть "Ожидается" 
//     // if ($todo["status"] == "Ожидается"){
//     //     continue;
//     // }

//     echo '<pre>';
//         echo "ID - " . $todo["id"] . "\n";
//         echo "План - " . $todo["title"] . "\n";
//         echo "Когда - " . $todo["date"] . "\n";
//         echo "Статус - " . $todo["status"] . "\n";

//     echo '</pre>';

//     //одна банда
//     $ct++;
// }

// ***6 урок домашнее задание***

function discriminant($a = 3, $b = -14, $c = -5) 
{
    return $b^2-4*$a*$c;
}

$aa = 'discriminant';

echo $aa();



