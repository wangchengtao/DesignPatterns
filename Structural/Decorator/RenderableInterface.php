<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/27
 * Time: 22:14
 */

namespace DesignPatterns\Structural\Decorator;


interface RenderableInterface
{
    public function renderData(): string;
}