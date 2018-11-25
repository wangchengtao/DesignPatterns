<?php
namespace DesignPatterns\Creational\Builder;

class TruckBuilder implements BuilderInterface
{
    /**
     * @var Truck
     */
    private $truck;


    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }


    public function addDoors()
    {
        $this->truck->setPart('left door', new Door());
        $this->truck->setPart('right door', new Door());
    }

    public function addEngine()
    {
        $this->truck->setPart('TruckEngine', new Engine());
    }

    public function addWheel()
    {
        $this->truck->setPart('wheel 1', new Wheel());
        $this->truck->setPart('wheel 2', new Wheel());
        $this->truck->setPart('wheel 3', new Wheel());
        $this->truck->setPart('wheel 4', new Wheel());
        $this->truck->setPart('wheel 5', new Wheel());
        $this->truck->setPart('wheel 6', new Wheel());
    }
}