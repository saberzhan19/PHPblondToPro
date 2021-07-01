<?php 

require_once "functions.php";

$names = ["Samal", "Asel", "Dina"];

class Name {
    //внизу свойство, пустые переменные
    public $names;
    public $new_name;
    public $update_name;
    public $name_key;
    public $remove_name;
    
    //внизу методы, функция для добавления имени
    public function add_name()
    {
        $this->names[] = $this->new_name;
        return $this->names;
    }

    public function remove_name()
    {
        foreach ($this->names as $key => $name) {
            if ($this->remove_name === $name){
                unset($this->names[$key]);
            }
        }
        return $this->names;
    }

    public function update_name()
    {
        $this->names[$this->name_key] = $this->update_name;
        return $this->names;
    }
}

// $at = new Name();
// // $at->add_name($names, "Elmira");
// $at->names = $names;
// $at->new_name = "Ann";

// $horse = new Name();
// $horse->names = ["Aigul"];
// $horse->new_name = "Selvia";


// $list = add_name($names, "Janel"); //-1-

$name = new Name;//скобки [] можно не использовать, если это не конструктор
$name->names = $names;

//Добавил имя и место из списка
$name->update_name = "Dinara";
$name->name_key = 0;

$name->update_name();

$name->new_name = "Makpal";
$name->add_name();
    /* 
    <!-- внизу код на добавление имени -1- -->
    <!-- <?php var_dump($list); ?> -->
    <!-- внизу код на удаление имени  -2- -->
    <!-- <?php var_dump(remove_name($names, "Asel")); ?> -->
    <!-- внизу код на изменение имени -3- -->
    <!-- <?php var_dump(update_name($names, 0, "Diana")); ?> -->
    <!-- внизу используется class добавлям имя-->
    <!-- <?php var_dump($at->add_name()); ?>
    <?php var_dump($horse->add_name()); ?> --> */
?>

<pre>
    <!-- внизу используется class удаляем имя-->
    <?php var_dump($name->update_name()); ?>

</pre>