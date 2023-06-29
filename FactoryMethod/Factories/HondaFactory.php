<?php

namespace DesignPatterns\FactoryMethod\Factories;

use DesignPatterns\FactoryMethod\Cars\CarsInterface;
use DesignPatterns\FactoryMethod\Cars\HondaCar;

class HondaFactory extends CarsFactory {
    public function createCar(): CarsInterface
    {
        return new HondaCar();
    }
}