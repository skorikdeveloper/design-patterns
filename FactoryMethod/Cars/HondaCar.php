<?php

namespace DesignPatterns\FactoryMethod\Cars;

class HondaCar implements CarsInterface {
    public function getModel(): string
    {
        return 'Honda';
    }
}