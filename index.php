<?php

try {
    if ( !file_exists("orderSetting.php")|| !file_exists("class\orderCar.php")) {
        throw new Exception("File with require data for order not found");
    }
    require_once "orderSetting.php";
    require_once "class\OrderCar.php";
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}


