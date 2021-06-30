<?php 

require_once "functions.php";

$names = ["Samal", "Asel", "Dina"];

class Name {
    //внизу свойство, пустые переменные
    public $names;
    public $new_name;
    
    //внизу методы, функция для добавления имени
    public function add_name()
    {
        $this->names[] = $this->new_name;
        return $this->names;
    }
}

$at = new Name();
// $at->add_name($names, "Elmira");
$at->names = $names;
$at->new_name = "Aigul";



// $list = add_name($names, "Janel"); //-1-

?>

<pre>
    <!-- внизу код на добавление имени -1- -->
    <!-- <?php var_dump($list); ?> -->
    <!-- внизу код на удаление имени  -2- -->
    <!-- <?php var_dump(remove_name($names, "Asel")); ?> -->
    <!-- внизу код на изменение имени -3- -->
    <!-- <?php var_dump(update_name($names, 0, "Diana")); ?> -->
    <!-- внизу используется class -->
    <?php var_dump($at->add_name($names, "Elmira")); ?>


</pre>