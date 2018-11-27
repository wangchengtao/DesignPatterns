<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/27
 * Time: 22:17
 */

namespace DesignPatterns\Structural\Decorator;


/**
 * 装饰者必须实现渲染接口类 RenderableInterface 契约，这是该设计
 * 模式的关键点。否则，这将不是一个装饰者而只是一个自欺欺人的包
 * 装。
 *
 * 创建抽象类 RendererDecorator （渲染器装饰者）实现渲染接口。
 */
abstract class RendererDecorator implements RenderableInterface
{
    protected $wrapped;

    public function __construct(RenderableInterface $render)
    {
        $this->wrapped = $render;
    }
}