<?php 

/* echo '<pre>';
    // print_r($_POST);
    print_r($_FILES);
echo '</pre>'; */

//если файл не соответствует нужному типу, то не загружать !==(не равно). А также можно обрабатывать размеры!
if ($_FILES["image"]["type"] !== "image/png") {
    echo "Файл не поддерживается";
    die;
}


// $_FILES["image"]["tmp_name"];

// Перемещает загруженный файл в новое место
// move_uploaded_file( $from , $to );
//загружает файл рядом, название неизменна
// move_uploaded_file( $_FILES["image"]["tmp_name"] , $_FILES["image"]["name"] );

//ниже дан еще 1 пример сохранить картинку уникальным, то есть она будет с разными названиями
// если нужно сохранить в отдельную место, то добавляем ниже "название папки/" с точкой перед time()
$dirSave = "uploads/" . time() . "_" . $_FILES["image"]["name"];
$haha = $_FILES["image"]["tmp_name"];

// move_uploaded_file( $haha, $dirSave);

// а также можно проверить загрузился ли файл вообще знак ! проверяет на наличие ошибок
if(!move_uploaded_file( $haha, $dirSave)) {
    echo "Произошла ошибка при загрузке файла";
    die();
} else {
    // echo "Файл успешно загружен по пути - " . $dirSave;
    // или по другому, со ссылкой
    echo "Файл успешно загружен по пути - <a href='$dirSave'>$dirSave</a>";

}
