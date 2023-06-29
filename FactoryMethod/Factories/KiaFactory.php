<?php

namespace DesignPatterns\FactoryMethod\Factories;

use DesignPatterns\FactoryMethod\Cars\CarsInterface;
use DesignPatterns\FactoryMethod\Cars\KiaCar;

class KiaFactory extends CarsFactory {
    public function createCar(): CarsInterface
    {
        return new KiaCar();
    }
}