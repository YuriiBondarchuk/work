<?php


class CarFactory
{
    
    public static function makeCar($carType)
    {
        return new $carType();
    }
}
