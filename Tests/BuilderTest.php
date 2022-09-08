<?php
declare(strict_types=1);

use  PHPUnit\Framework\TestCase;
use creational\Builder\BMWCarBuilder;
use creational\Builder\CarProducer;
use creational\Builder\Models\BMWCar;
use creational\Builder\BNEZCarBuilder;
use creational\Builder\Models\BENZCar;
class BuilderTest extends TestCase
{
    public  function  testProduceBMWCar(){
        $BMWBuilder = new BMWCarBuilder();
        $carProducer = new CarProducer($BMWBuilder);
        $myCar = $carProducer->produceCar();
        $this->assertInstanceOf(BMWCar::class,$myCar);
    }
    public  function  testProduceBENZCar(){
        $BENZBuilder = new BNEZCarBuilder();
        $carProducer = new CarProducer($BENZBuilder);
        $myCar = $carProducer->produceCar();
        $this->assertInstanceOf(BENZCar::class,$myCar);
    }
}