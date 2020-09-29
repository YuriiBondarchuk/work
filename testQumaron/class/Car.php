<?php


class Car extends BaseCar implements CarInterface
{
    
    private $typeEngine = 'gasoline';
    private $engineCapacity = 5.0;
    private $numberSpeed = 4;
    private $colorAuto = 'red';
    private $interiorMaterial = 'substitute';
    private $interiorColor = 'white';
    private $transmissionType = 'manually';
    private $equipmentCar = 'business';
    
    public function __construct()
    {
        $this->setUserManagerData();
        $this->setTypeEngine();
        $this->setEngineCapacity();
        $this->setNumberSpeed();
        $this->setColorAuto();
        $this->setInteriorMaterial();
        $this->setInteriorColor();
        $this->setTransmissionType();
        $this->setEquipmentCar();
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
        if (defined('TRANSMISSION_TYPE') && TRANSMISSION_TYPE === 'manually') {
            if (defined('NUMBER_SPEEDS')) {
                $this->numberSpeed = NUMBER_SPEEDS;
            }
            
            $message = $this->firstPathMessage . $this->numberSpeed . ' speed';
            $this->sentInformation($message);
            $this->setAllCharacteristics('Number speed: ' . $this->numberSpeed);
        }
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
    
    public function setTransmissionType()
    {
        if (defined('TRANSMISSION_TYPE')) {
            $this->transmissionType = TRANSMISSION_TYPE;
        }
        
        $message = $this->firstPathMessage . $this->transmissionType . ' transmission type';
        $this->sentInformation($message);
        $this->setAllCharacteristics('Transmission type: ' . $this->transmissionType);
    }
    
    public function setEquipmentCar()
    {
        if (defined('EQUIPMENT_CAR')) {
            $this->equipmentCar = EQUIPMENT_CAR;
        }
        
        $message = $this->firstPathMessage . $this->equipmentCar . ' equipment car';
        $this->sentInformation($message);
        $this->setAllCharacteristics('Equipment car: ' . $this->equipmentCar);
    }
    
}
