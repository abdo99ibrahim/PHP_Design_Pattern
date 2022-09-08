<?php

namespace creational\Builder;

use creational\Builder\Models\BENZCar;
use creational\Builder\Models\Car;

class BNEZCarBuilder implements CarBuilderInterface
{
    /**
     * @var Car $type
     */
    private $type;
    public function createCar()
    {
        $this->type = new BENZCar();
    }

    public function addEngine()
    {
        $this->type->setPart('ENGINE','engine');
    }

    public function addDoor()
    {
        $this->type->setPart('DOOR','door');
    }

    public function addBody()
    {
        $this->type->setPart('Body','body');
    }

    public function addWheel()
    {
        $this->type->setPart('WHEEL','wheel');
    }

    public function getCar():Car
    {
       return  $this->type;
    }
}