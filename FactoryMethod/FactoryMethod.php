<?php
namespace DesignPatterns\FactoryMethod;

use DesignPatterns\FactoryMethod\Factories\CarsFactory;
use DesignPatterns\FactoryMethod\Factories\HondaFactory;
use DesignPatterns\FactoryMethod\Factories\KiaFactory;

class FactoryMethod {
    private array $cars;
    public function __construct()
    {
        $this->cars = [new KiaFactory(), new KiaFactory(), new HondaFactory(), new KiaFactory(), new HondaFactory()];
    }

    private function showModelOfCar(CarsFactory $car) : string
    {
        return $car->getCarModel();
    }

    public function printCars() : void {
        foreach ($this->cars as $car) {
            echo $this->showModelOfCar($car);
        }
    }
}


//Таким образом, мы можем создавать различные фабрики, каждая из которых создает экземпляры конкретного автомобиля, и динамически выбирать фабрику в соответствии с требованиями при создании объекта автомобиля. Это позволяет нам легко добавлять новые автомобили и их соответствующие фабрики без изменения существующего кода.