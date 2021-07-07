<?php 

class Goods {
    
    //свойства, это есть модификаторы доступа public- доступный всем, есть еще private- с ограниченным доступом
    private $model;
    private $quality;
    private $year;
    private $color;

    //конструктор
    public function __construct($model, $quality, $year, $color)
    {
        $this->model = $model;
        $this->quality = $quality;
        $this->year = $year;
        $this->color = $color;
        
    }
    
    //методы
    public function show()
    {
        $tax = $this->tax();

        echo "<div style='padding: 20px; background: aqua; font-family: Monserrat, cursive;'>
                <h2>Model: $this->model</h2>
                <p>Quality: $this->quality</p>
                <p>Year: $this->year</p>
                <p>Tax: $tax$</p>
                <p>Color: <b><span style='color: $this->color;'>$this->color</span></b></p>
            </div>";

    }

    //метод для вычесление налога на товар, это и есть понятие инкапсуляция, с ограниченным доступом
    private function tax()
    {
        if ($this->quality <= 150){
            return $this->quality * 15 / 3; 
        } elseif ($this->quality <= 250){
            return $this->quality * 30 / 3; 
        } elseif ($this->quality > 25){
            return $this->quality * 20 / 3; 
        }
    }
}
