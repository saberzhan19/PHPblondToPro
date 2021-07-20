<?php

namespace App\Services;

class Router
{
    //проверочный, видно в index.php -1-
    // public static function test() {
        //     echo 123;
        // }
        
        // создаем массив, который будет содержать список всех url
        private static $list = [];

    // этот метод будет открывать страницу, которую укажем
    public static function page($uri , $page_name)
    {
        self::$list[] = [
            "uri" => $uri,
            "page" => $page_name
        ];
    }

    // активатор роутера
    public static function enable()
    {
        // print_r(self::$list);//это была проверка на работспособность

        $query = $_GET['q'];

        foreach ( self::$list as $route) {
            if($route["uri"] === '/'. $query)//если все совподает
            {
                // то, и еще снизу views просто пишем без 2 шагов назад /../../ потому что все взаимосвязоно в корневой папке index.php
                require_once "views/pages/" . $route['page'] . ".php";
                die();
            }
        }
    }

    private function not_found_page()
    {
        require_once "views/pages/" . $route['page'] . ".php";

    }
}