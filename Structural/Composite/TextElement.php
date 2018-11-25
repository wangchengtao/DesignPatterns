<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * DateTime: 2018/11/25 18:05
 */

namespace DesignPatterns\Structural\Composite;


class TextElement implements RenderableInterface
{
    private  $text;

    public function render(): string
    {
        return  $this->text;
    }

    public function __construct($str)
    {
        $this->text = $str;
    }
}