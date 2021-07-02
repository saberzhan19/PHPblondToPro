<?php 

class Name {
    //внизу свойство, пустые переменные
    public $names;
    public $new_name;
    public $update_name;
    public $name_key;
    public $remove_name;
    public $new_list;
    
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

        $this->array_reset();//этот метод переберет массив и сделает с правильными ключами

        return $this->names;
    }

    public function update_name()
    {
        $this->names[$this->name_key] = $this->update_name;
        return $this->names;
    }

    //для обнвления пустующих ключей
    public function array_reset()
    {
        // $new_list = [];//потому что вверху наряду с пабликами есть

        foreach ($this->names as $name)
        {
            // $new_list[] = $name;
            $this->new_list[] = $name;
            //так перебрали ключи от 0 и тд
        }

        $this->names = $this->new_list;
        unset($this->new_list);//очищяет каждый раз
    }
}