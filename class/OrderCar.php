<?php

//require_once './../factory/CarFactory.php';

class OrderCar
{
    
    public function buildCar()
    {
        CarFactory::makeCar(TYPE_MACHINE);
    }
    
    protected function  printCharacteristics(){
    
    }
}
(new OrderCar())->buildCar();


