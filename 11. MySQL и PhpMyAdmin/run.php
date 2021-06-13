<?php 

// 12. MySQL и PhpMyAdmin - добавление данных в таблицу
//добавил сообщение в таблицу БД

?>

<form action="vendor/create.php" method="post">
<p>Title of article</p>
<input type="text" name="title">
<p>Body of article</p>
<textarea name="body"></textarea><br><br>
<button type="submit">Send article</button>
</form>