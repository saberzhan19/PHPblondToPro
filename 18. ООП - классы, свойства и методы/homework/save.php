<?php 

$model = $_POST["model"];
$color = $_POST["color"];
$horsepower = $_POST["horsepower"];
$year = $_POST["year"];

$content = "Car model: $model\nCar color: $color\nCar horsepower: $horsepower\nCar year: $year";
$filename = "reports/model_production_year.txt";

$fp = fopen($filename, "w");
fwrite($fp, $content);
fclose($fp);

if(!$fp){
    die "Error";
}

header("Location: index2.php");
