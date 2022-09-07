<?php
namespace creational\AbstractFactory;

class BMWCar implements CarInterface{
    private $price;
    public function __construct($price)
    {
        $this->price = $price;
    }
    public function caculatePrice()
    {
        return $this->price + 120000;
    }
}
?>