<?php
namespace DesignPatterns\Creational\Builder;

class CarBuilder implements BuilderInterface
{
    /**
     * @var Car
     */
    private $car;

    public function createVehicle()
    {
        $this->car = new Car();
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }

    public function addDoors()
    {
        $this->car->setPart('door1', new Door());
        $this->car->setPart('door2', new Door());
        $this->car->setPart('door3', new Door());
        $this->car->setPart('door4', new Door());
    }

    public function addEngine()
    {
        $this->car->setPart('CarEngine', new Engine());
    }

    public function addWheel()
    {
        $this->car->setPart('wheel1', new Wheel());
        $this->car->setPart('wheel2', new Wheel());
        $this->car->setPart('wheel3', new Wheel());
        $this->car->setPart('wheel4', new Wheel());
    }
}