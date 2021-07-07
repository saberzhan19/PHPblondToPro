<?php 

class audi 
{
    //создаем свойства
    /* private $model;
    private $year;
    private $horsepower; */

    public static $sms; //это статистическое свойство

    public static function showSms()
    {
        return self::$sms;
    }

    //заполняем свойства
    /* public function __construct($model, $year, $horsepower)
    {
        $this->model = $model;
        $this->year = $year;
        $this->horsepower = $horsepower;
    } */

    //что будет делать наш класс
    /* public function show()
    {
        //self::обращение к статистическому методу
        $price = $this->getPrice($this->model, $this->year, $this->horsepower);

        echo "
            <div style='padding: 20px; background: aqua; font-family: Monserrat;'>
                <h2>Model: $this->model</h2>
                <h4>Year: $this->year</h4>
                <h4>Horsepower: $this->horsepower</h4>
                <h4>Price ~ $price$</h4>
            </div>
        ";
    } */

    //обычный метод для вычета цены
    /* public function getPrice()
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
    } */
    
    //внизу статисчиский метод, this нельзя применять
   /*  public static function getPrice($model, $year, $horsepower)
    {
        $price = 0;//временная перменная

        if($model == 'Lexus'){
            $price += 4000;
        } elseif ($model == 'Toyota'){
            $price += 3500;
        }

        if($horsepower > 200){
            $price -= 100;
        } elseif($horsepower > 150 && $horsepower < 200){
            $price -= 300;
        } elseif($horsepower > 100 && $horsepower < 150){
            $price -= 600;
        }

        if($year > 2015){
            $price += 300;
        } elseif($year > 2010 && $year < 2015){
            $price += 100;
        } elseif($year > 2005 && $year < 2010){
            $price += 30;
        }

        return $price;
    } */

    // это статический метод внизу, после модификатора доступа ставим ключивое слова static
  /*   public static function staticMethod()
    {
        return "Some text by static method!";
    } */
}