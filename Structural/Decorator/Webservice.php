<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/27
 * Time: 22:15
 */

namespace DesignPatterns\Structural\Decorator;


class Webservice implements RenderableInterface
{
    private $data;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function renderData(): string
    {
        return $this->data;
    }
}