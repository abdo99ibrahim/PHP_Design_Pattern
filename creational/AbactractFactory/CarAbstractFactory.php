<?php
namespace creational\AbstractFactory;
class CarAbstractFactory{

    private $tax = 100000;
    private $price;
    public function __construct($price)
    { 
        $this->price = $price;
    }

    public function createBMWCar():BMWCar
    {
        return new BMWCar($this->price);
    }

    // :BenzCar ==> Return Type
    public function createBenzCar():BenzCar
    {
        return new BenzCar($this->price,$this->tax);
    }
}
?>