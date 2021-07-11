<?php 

require_once "workers.php";

Worker::$all = "Success";
echo Worker::show();
?>

<br><br>
<form action="" method="post">
    <input type="text" placeholder="name"><br><br>
    <input type="text" placeholder="email"><br><br>
    <input type="text" placeholder="age"><br><br>
    <input type="text" placeholder="proffession"><br><br>
    <button type="submit">Send message</button>
</form>
