<?php 

error_reporting(E_ALL);

require_once __DIR__ . '/../MySQL_11/vendor/db.php';


?>

<form action="creations.php" method="post">
    <p>Your email</p>
    <input type="text" name="title" required="required">
    <p>Left your comments</p>
    <textarea name="body"></textarea><br><br>
    <button type="submit">Send message</button>
</form>

<!-- точка(на один шаг, 2 как слэш) или слэш(/, полностью на главное) играет роль, я внизу возвращаю на главную страницу -->
<a href="/13.Вывод_данных_из_таблицы/run.php">To main</a>
