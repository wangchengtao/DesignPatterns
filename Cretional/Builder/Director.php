<?php
namespace DesignPatterns\Creational\Builder;

class Director
{
    public function build(BuilderInterface $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addEngine();
        $builder->addDoors();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}