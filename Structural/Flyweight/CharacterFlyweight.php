<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/29
 * Time: 21:56
 */

namespace DesignPatterns\Structural\Flyweight;


class CharacterFlyweight implements FlyweightInterface
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function render(string $font): string
    {
        // 享元对象需要客户端提供环境依赖信息来自我定制
        // 外在状态经常包含享元对象呈现的特点, 例如字符

        return sprintf('Character %s with font %s', $this->name, $font);
    }
}