<?php
namespace Tests;

use creational\AbstractFactory\BenzCar;
use creational\AbstractFactory\CarAbstractFactory;
use creational\AbstractFactory\BMWCar;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase{

    public function testCanCreateBMWCar(){
        require 'creational/AbactractFactory/CarInterface.php';
        require 'creational/AbactractFactory/CarAbstractFactory.php';
        require 'creational/AbactractFactory/BMWCar.php';
        $carFactory = new CarAbstractFactory(200000);
        $myCar = $carFactory->createBMWCar();
        $this->assertInstanceOf(BMWCar::class,$myCar);
    }

    public function testCanCreateBenzCar(){
        require 'creational/AbactractFactory/CarInterface.php';
        require 'creational/AbactractFactory/CarAbstractFactory.php';
        require 'creational/AbactractFactory/BenzCar.php';
        $carFactory = new CarAbstractFactory(1200002);
        $myCar = $carFactory->createBenzCar();
        $this->assertInstanceOf(BenzCar::class,$myCar);
    }
}

?>