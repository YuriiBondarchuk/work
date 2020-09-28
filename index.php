<?php

require_once 'class\Logger.php';
require_once 'class\Mail.php';
require_once 'class\BaseCar.php';
require_once 'interface\BaseCarInterface.php';
require_once 'interface\TruckInterface.php';
require_once 'class\Truck.php';
require_once 'factory\CarFactory.php';


try {
    if ( !file_exists("orderSetting.php")|| !file_exists("class\orderCar.php")) {
        throw new Exception("File with require data for order not found");
    }
    require_once "orderSetting.php";
    require_once "class\OrderCar.php";
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}


