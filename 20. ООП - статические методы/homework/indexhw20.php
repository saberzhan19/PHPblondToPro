<?php 

// Задачи
// занести временную метку, когда пользователь был добавлен в формате День-Месяц-Год Час:Минуты - сделал цель 1!
// добавленные пользователи не повторялись - сделал цель 2!

require_once "workers.php";

// Worker::$all = "Success";
// echo Worker::show();

?>

<br><br>
<center>
    <form action="sendletter.php" method="post" >
        <p>Аты:</p>
        <input type="text" name="name" placeholder="name" required><br><br>
        <p>Email:</p>
        <input type="email" name="email" placeholder="email" required><br><br>
        <p>Жасы:</p>
        <input type="number" name="age" placeholder="age" required><br><br>
        <p>Мамандыгы:</p>
        <input type="text" name="proffesion" placeholder="proffession"><br><br>
        <input type="hidden" name="register_time">
        <!-- <?php echo 'Текущее время: ' . date('Y-m-d H:i:s') . "\n";?> -->
        <br>

        <button type="submit">Send message</button>
    </form>
    <button onclick="document.location='./'">Back to main</button>    
    <!-- виды назад, по адресу и все работают -->
    <!-- <button onclick="document.location.href='./'">Back to main</button>     -->
    <!-- <button onclick="location='./'">Back to main</button>     -->
    <!-- <button onclick="location.href='./'">Back to main</button>     -->
    <!-- <button onclick="window.location.href='./'">Back to main</button>     -->
</center>
