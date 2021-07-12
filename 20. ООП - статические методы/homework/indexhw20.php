<?php 

require_once "workers.php";

// Worker::$all = "Success";
// echo Worker::show();

?>

<br><br>
<center>
    <form action="sendletter.php" method="post" >
        <p>Есем:</p>
        <input type="text" placeholder="name" required><br><br>
        <p>Email:</p>
        <input type="email" placeholder="email" required><br><br>
        <p>Возраст:</p>
        <input type="number" placeholder="age" required><br><br>
        <p>Работа:</p>
        <input type="text" placeholder="proffession"><br><br>
        <button type="submit">Send message</button>
    </form>
    <button onclick="document.location='./'">Back to main</button>    
    <!-- виды назад, по адресу и все работают -->
    <!-- <button onclick="document.location.href='./'">Back to main</button>     -->
    <!-- <button onclick="location='./'">Back to main</button>     -->
    <!-- <button onclick="location.href='./'">Back to main</button>     -->
    <!-- <button onclick="window.location.href='./'">Back to main</button>     -->
</center>
