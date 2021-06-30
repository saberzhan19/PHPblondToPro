<?php 

function add_name($names, $name) {
    $names[] = $name;
    return $names;
}

// внизу функция для удаления -2-
function remove_name($names, $rem_name){
    foreach ($names as $key => $name){
        if($rem_name= $name){
            unset($names[$key]);
        }
    }
    return $names;
}
// внизу функция для изменения -3-
function update_name($names, $key, $new_name){
    $names[$key] = $new_name;
    return $names;
}