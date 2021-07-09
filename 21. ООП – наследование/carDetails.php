<?php 

//вычесление налога по его характеристикам
class CarDetails
{
    public function getTax()
    {
        //формула
        if($this->horsepower >200) {
            return 400;
        } elseif ($this->horsepower < 200 && $this->horsepower > 150){
            return 200;
        } elseif ($this->horsepower < 150 && $this->horsepower > 50){
            return 50;
        }
    }
}