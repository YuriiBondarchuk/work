<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 27.09.2020
 * Time: 17:12
 */

interface Truck
{
    
    public function setTypeEngine(): string;
    
    public function setEngineCapacity(): float;
    
    public function setNumberSpeed(): int;
    
    public function setColorAuto(): string;
    
    public function setInteriorMaterial(): string;
    
    public function setInteriorColor(): string;
    
    public function setCapacityTruck(): string;
    
    public function setTruckBodyType(): string;
    
}
