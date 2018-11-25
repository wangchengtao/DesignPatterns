<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * DateTime: 2018/11/25 18:05
 */

namespace DesignPatterns\Structural\Composite;


class InputElement implements RenderableInterface
{
    public function render(): string
    {
        return '<input type="text" />';
    }
}