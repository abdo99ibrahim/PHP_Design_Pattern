<?php

namespace creational\Builder;

use creational\Builder\Models\Car;
use creational\Builder\Models\BMWCar;

class BMWCarBuilder implements  CarBuilderInterface
{
    /**
     * @var Car $type
     */
    private $type;

    public function createCar()
    {
        $this->type = new BMWCar();
    }

    public function addEngine()
    {
        $this->type->setPart('ENGINE','engine');
    }

    public function addDoor()
    {
        $this->type->setPart('DOOR','BM-door');
    }

    public function addBody()
    {
        $this->type->setPart('Body','BM-body');
    }

    public function addWheel()
    {
        $this->type->setPart('WHEEL','BM-wheel');
    }

    public function getCar():Car
    {
        return  $this->type;
    }
}