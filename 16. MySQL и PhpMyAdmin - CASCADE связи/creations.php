
<?php 

error_reporting(E_ALL);

require_once __DIR__ . '/../MySQL_11/vendor/db.php';

$body = $_POST["body"];
// $post_id = $_POST["post_id"];
$date = date("Y-m-d");

$quick = mysqli_query($db, "INSERT INTO comments(id, body,  date) VALUES (NULL, '$body', '$date')");

if (!$quick) {
    die("Error add new article");
}
echo("Success!!");

?>

<!-- точка(на один шаг) или слэш(/, полностью на главное) играет роль, я внизу возвращаю на главную страницу -->
<br><br><a href="..">To main</a>


