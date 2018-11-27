<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/27
 * Time: 22:20
 */

namespace DesignPatterns\Structural\Decorator;


class JsonRenderer extends RendererDecorator
{
    public function renderData(): string
    {
        return json_encode($this->wrapped->renderData());
    }
}