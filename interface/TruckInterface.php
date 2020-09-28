<?php

interface TruckInterface
{
    
    public function setTypeEngine(): string;
    
    public function setEngineCapacity(): float;
    
    public function setNumberSpeed(): int;
    
    public function setColorAuto(): string;
    
    public function setInteriorMaterial(): string;
    
    public function setInteriorColor(): string;
    
    public function setCapacityTruck(): float;
    
    public function setTruckBodyType(): string;
    
}
