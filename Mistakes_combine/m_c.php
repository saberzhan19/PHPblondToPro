<?php 


error_reporting(0);
function user_handler($n, $str,$file, $line)
    {
     echo
         "Номер: ".$n."<br />".
         "Описание: ".$str." <br />".
         "Имя файла: ".$file."<br />".
         "Строка кода: ".$line;
         return true;
    }
set_error_handler('user_handler', E_ALL);
// require("nofile.php");

?>