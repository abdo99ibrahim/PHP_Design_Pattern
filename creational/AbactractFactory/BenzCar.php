<?php
namespace creational\AbstractFactory;

class BenzCar implements CarInterface{
    private $price;
    private $tax;
    public function __construct($price,$tax)
    {
        $this->price=$price;
        $this->tax=$tax;
    } 
    public function caculatePrice()
    {
        return $this->price + $this->tax + 20000;
    }
}
?>