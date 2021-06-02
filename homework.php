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
/* $isStatus = ["sa","ray"];
$as = "sa";

$statusResult = (in_array($as, $isStatus) == true) ? "43224656" : "98645623";

echo $statusResult; */

// 3 - оператора switch, выполнил!

$typeCar = "";

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
}




