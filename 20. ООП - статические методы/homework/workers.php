<?php 

class Worker {
    
    private static $workers;
    public static $create;
    public static $all;
    public static $save;

    public static function show() {
       return self::$all;
    }

    public static function workers($name, $email, $age, $profession, $register_time)
    {
        echo"
        <div>
            <input type='text'>Name: $name</input>
            <input type='text'>Email: $email</input>
            <input type='text'>Age: $age</input>
            <input type='text'>Profession: $profession</input>
        </div>
        ";
    }

    

}