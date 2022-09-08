<?php

namespace creational\Builder;

use creational\Builder\Models\Car;

interface CarBuilderInterface
{
    public function createCar();
    public function addEngine();
    public function addDoor();
    public function addBody();
    public function addWheel();
    public function getCar():Car;
}