<?php

namespace creational\Builder;

// الل هيكريت ال عربيات

use creational\Builder\Models\Car;

class CarProducer
{
    /**
     * @var CarBuilderInterface
     */
    private  $Builder;

    public function __construct(CarBuilderInterface $builder)
    {
        $this->Builder = $builder;
    }

    /**
     * @return CarBuilderInterface
     */
    public function produceCar():Car
    {
        $this->Builder->createCar();
        $this->Builder->addEngine();
        $this->Builder->addDoor();
        $this->Builder->addWheel();
        $this->Builder->addBody();
   return     $this->Builder->getCar();
    }
}