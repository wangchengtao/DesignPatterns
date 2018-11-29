<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/29
 * Time: 21:57
 */

namespace DesignPatterns\Structural\Flyweight;


class FlyweightFactory implements \Countable
{
    private $pool = [];

    public function get(string $name): CharacterFlyweight
    {
        if (! isset($this->pool[$name])) {
            $this->pool[$name] = new CharacterFlyweight($name);
        }

        return $this->pool[$name];
    }

    public function count(): int
    {
        return count($this->pool);
    }
}