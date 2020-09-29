<?php


class OrderCar
{
    
    public static $messageBuildCarFinished = 'Your order has been completed';
    
    public static function buildCar()
    {
        return CarFactory::makeCar(TYPE_MACHINE);
    }
    
}

Mail::sendMail(CLIENT_EMAIL, 'The order has been fulfilled', OrderCar::$messageBuildCarFinished);
$newCar = OrderCar::buildCar();
echo $newCar->printCharacteristics();
