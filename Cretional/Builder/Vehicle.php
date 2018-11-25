<?php
namespace DesignPatterns\Creational\Builder;

abstract class Vehicle
{
    private $parts = [];

    public function setPart($key, $value)
    {
        $this->parts[$key] = $value;
    }
}