<?php

namespace DesignPatterns\FactoryMethod\Cars;

class KiaCar implements CarsInterface {
    public function getModel(): string
    {
        return 'Kia';
    }
}