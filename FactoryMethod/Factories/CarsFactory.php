<?php

namespace DesignPatterns\FactoryMethod\Factories;

use DesignPatterns\FactoryMethod\Cars\CarsInterface;

abstract class CarsFactory {
    abstract public function createCar() : CarsInterface;

    public function getCarModel() : string {
        $car = $this->createCar();

        return 'Car is a ' . $car->getModel() . "\n";
    }
}