<?php

namespace DesignPatterns\Creational\AbstractFactory;

abstract class Text
{
    /**
     * @var [stirng]
     */
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }
}
