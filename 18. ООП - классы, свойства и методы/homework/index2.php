<?php

require_once "car.php";


?>

<form action="save.php" method="post">
    <p>Car model</p>
    <input type="text" name="model">
    <p>Car color</p>
    <input type="text" name="color">
    <p>Car horsepower</p>
    <input type="number" name="horsepower"><br><br>
    <p>Car year</p>
    <input type="number" name="year"><br><br>
    <button type="submit">Сохранить данные</button>
</form>
    <button onclick="document.location='./'">Back to main</button>