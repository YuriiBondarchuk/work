<?php

require_once 'Mail.php';

class Truck implements TruckInterface
{
    
    private $typeEngine = 'gasoline';
    private $engineCapacity = 5.0;
    private $numberSpeed = 4;
    private $colorAuto = 'black';
    private $interiorMaterial = 'substitute';
    private $interiorColor = 'gray';
    private $capacityTruck = 20.0;
    private $truckBodyType = 'closed';
    
    public function __construct()
    {
        
        $this->setTypeEngine();
        $this->setEngineCapacity();
        $this->setNumberSpeed();
        $this->setColorAuto();
        $this->setInteriorMaterial();
        $this->setInteriorColor();
        $this->setCapacityTruck();
        $this->setTruckBodyType();
    }
    
    public function setTypeEngine(): string
    {
        
        if (defined('TYPE_ENGINE')) {
            $this->typeEngine = TYPE_ENGINE;
        }
        Mail::sendMail(CLIENT_EMAIL, 'setTypeEngine', 'The  car ordered by you is installed ' . $this->typeEngine . ' engine');
        Logger::getLogger($name)->log($data);
    }
    
    public function setEngineCapacity(): float
    {
        if (defined('ENGINE_CAPACITY')) {
            $this->engineCapacity = ENGINE_CAPACITY;
        }
    }
    
    public function setNumberSpeed(): int
    {
        if (defined('NUMBER_SPEEDS')) {
            $this->numberSpeed = NUMBER_SPEEDS;
        }
    }
    
    public function setColorAuto(): string
    {
        if (defined('COLOR_AUTO')) {
            $this->colorAuto = COLOR_AUTO;
        }
    }
    
    public function setInteriorMaterial(): string
    {
        if (defined('INTERIOR_MATERIAL')) {
            $this->interiorMaterial = INTERIOR_MATERIAL;
        }
    }
    
    public function setInteriorColor(): string
    {
        if (defined('INTERIOR_COLOR')) {
            $this->interiorColor = INTERIOR_COLOR;
        }
    }
    
    public function setCapacityTruck(): float
    {
        if (defined('CAPACITY_TRUCK')) {
            $this->capacityTruck = CAPACITY_TRUCK;
        }
    }
    
    public function setTruckBodyType(): string
    {
        if (defined('TRUCK_BODY_TYPE')) {
            $this->truckBodyType = TRUCK_BODY_TYPE;
        }
    }
    
}
