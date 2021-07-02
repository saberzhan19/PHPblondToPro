<?php 

require_once "functions.php";
require_once "classes.php";

$names = ["Samal", "Asel", "Dina"];


// $at = new Name();
// // $at->add_name($names, "Elmira");
// $at->names = $names;
// $at->new_name = "Ann";

// $horse = new Name();
// $horse->names = ["Aigul"];
// $horse->new_name = "Selvia";


// $list = add_name($names, "Janel"); //-1-

/* 
ООП 
 */

$name = new Name;//скобки [] можно не использовать, если это не конструктор
$name->names = $names;//["Samal", "Asel", "Dina"]

//Обновил имя и место из списка
/* $name->update_name = "Dinara";
$name->name_key = 0;

$name->update_name();

$name->new_name = "Makpal";
$name->add_name();
 */
$name->remove_name = "Asel";
$name->remove_name();

print_r($name->remove_name());

/* 
Просто функций
 */

 $new_list = add_name($names, "Luisa");
 $new_list2 = remove_name($names, "Dina");
 $new_list3 = update_name($names, 1, "Kristina");



    /* 
    <!-- внизу код на добавление имени -1- -->
    <!-- <?php var_dump($list); ?> -->
    <!-- внизу код на удаление имени  -2- -->
    <!-- <?php var_dump(remove_name($names, "Asel")); ?> -->
    <!-- внизу код на изменение имени -3- -->
    <!-- <?php var_dump(update_name($names, 0, "Diana")); ?> -->
    <!-- внизу используется class добавлям имя-->
    <!-- <?php var_dump($at->add_name()); ?>
    <?php var_dump($horse->add_name()); ?> --> 
    // <!-- внизу используется class изменяем имя-->
    // <!-- <?php var_dump($name->update_name());?> -->
    */
?>

<!-- <pre>
     <!-- внизу используется class изменяем имя, один из вариантов, к тому же он универсальный-->
    <?php var_dump($name->names); ?>

</pre> 