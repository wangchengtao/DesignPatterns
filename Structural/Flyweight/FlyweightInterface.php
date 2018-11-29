<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/29
 * Time: 21:56
 */

namespace DesignPatterns\Structural\Flyweight;

/*
 * 创建享元接口
 */
interface FlyweightInterface
{
    /*
     * 创建传递函数
     * 返回字符串格式数据
     */
    public function render(string $extrinsicState): string;
}