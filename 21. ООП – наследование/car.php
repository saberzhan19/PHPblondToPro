<?php 

// require_once "tesrclass.php"; -1-
require_once "carDetails.php";

class audi extends CarDetails
// extends TesrClass -1-
{
    //создаем свойства
    protected $model;
    private $year;
    protected $horsepower;

    //заполняем свойства
    public function __construct($model, $year, $horsepower)
    {
        $this->model = $model;
        $this->year = $year;
        $this->horsepower = $horsepower;
    }

    public function info()
    {
        return [
            "model" => $this->model,
            "year" => $this->year,
            "horsepower" => $this->horsepower,
            "price" => $this->getPrice(),
            "tax" => $this->getTax(),
            "review" => $this->reviewText()
        ];
    }

    private function getPrice()
    {
        $price = 0;//временная перменная

        if($this->model == 'Lexus'){
            $price += 4000;
        } elseif ($this->model == 'Toyota'){
            $price += 3500;
        }

        if($this->horsepower > 200){
            $price -= 100;
        } elseif($this->horsepower > 150 && $this->horsepower < 200){
            $price -= 300;
        } elseif($this->horsepower > 100 && $this->horsepower < 150){
            $price -= 600;
        }

        if($this->year > 2015){
            $price += 300;
        } elseif($this->year > 2010 && $this->year < 2015){
            $price += 100;
        } elseif($this->year > 2005 && $this->year < 2010){
            $price += 30;
        }

        return $price;
    }
}