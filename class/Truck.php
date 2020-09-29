<?php


class Truck extends BaseCar implements TruckInterface
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
        $this->setUserManagerData();
        $this->setTypeEngine();
        $this->setEngineCapacity();
        $this->setNumberSpeed();
        $this->setColorAuto();
        $this->setInteriorMaterial();
        $this->setInteriorColor();
        $this->setCapacityTruck();
        $this->setTruckBodyType();
    }
    
    public function setTypeEngine()
    {
        
        if (defined('TYPE_ENGINE')) {
            $this->typeEngine = TYPE_ENGINE;
        }
        $message = $this->firstPathMessage . $this->typeEngine . ' engine';
        $this->sentInformation($message);
        $this->setAllCharacteristics('Type engine:' . $this->typeEngine);
    }
    
    public function setEngineCapacity()
    {
        if (defined('ENGINE_CAPACITY')) {
            $this->engineCapacity = ENGINE_CAPACITY;
        }
        
        $message = $this->firstPathMessage . $this->engineCapacity . ' engine';
        $this->sentInformation($message);
        $this->setAllCharacteristics('Engine capacity: ' . $this->engineCapacity);
    }
    
    public function setNumberSpeed()
    {
        if (defined('NUMBER_SPEEDS')) {
            $this->numberSpeed = NUMBER_SPEEDS;
        }
        
        $message = $this->firstPathMessage . $this->numberSpeed . ' speed';
        $this->sentInformation($message);
        $this->setAllCharacteristics('Number speed: ' . $this->numberSpeed);
    }
    
    public function setColorAuto()
    {
        if (defined('COLOR_AUTO')) {
            $this->colorAuto = COLOR_AUTO;
        }
        $message = $this->firstPathMessage . $this->colorAuto . ' color';
        $this->sentInformation($message);
        $this->setAllCharacteristics('Color auto: ' . $this->colorAuto);
    }
    
    public function setInteriorMaterial()
    {
        if (defined('INTERIOR_MATERIAL')) {
            $this->interiorMaterial = INTERIOR_MATERIAL;
        }
        $message = $this->firstPathMessage . $this->interiorMaterial . ' interior material';
        $this->sentInformation($message);
        $this->setAllCharacteristics('Interior material: ' . $this->interiorMaterial);
    }
    
    public function setInteriorColor()
    {
        if (defined('INTERIOR_COLOR')) {
            $this->interiorColor = INTERIOR_COLOR;
        }
        
        $message = $this->firstPathMessage . $this->interiorColor . ' interior color';
        $this->sentInformation($message);
        $this->setAllCharacteristics('Interior color: ' . $this->interiorColor);
    }
    
    public function setCapacityTruck()
    {
        if (defined('CAPACITY_TRUCK')) {
            $this->capacityTruck = CAPACITY_TRUCK;
        }
        $message = $this->firstPathMessage . $this->capacityTruck . ' capacity truck';
        $this->sentInformation($message);
        $this->setAllCharacteristics('Capacity truck: ' . $this->capacityTruck);
    }
    
    public function setTruckBodyType()
    {
        if (defined('TRUCK_BODY_TYPE')) {
            $this->truckBodyType = TRUCK_BODY_TYPE;
        }
        $message = $this->firstPathMessage . $this->truckBodyType . ' truck body type';
        $this->sentInformation($message);
        $this->setAllCharacteristics('Truck body type: ' . $this->truckBodyType);
    }
}
