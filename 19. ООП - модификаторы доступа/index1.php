
<?php 

//ООП - модификаторы доступа

require_once "goods.php";

//создаем объект -1-
// $goods = new Goods();

//создаем объект, так доступна после того как в goods.php добавили метод __construct()-2-
$goods = new Goods("Toys", "100%", "2021", "green");

// дальше заполняем свойства информацией, -> это объект, а не массив -1-
// $goods->model = "Toys";
// $goods->quality = "100";
// $goods->year = "2021";
// $goods->color = "green";

$goods->show();
?>

