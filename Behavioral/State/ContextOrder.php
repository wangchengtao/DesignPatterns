<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * Date: 2018/12/3
 * Time: 23:55
 */

namespace DesignPatterns\Behavioral\State;


class ContextOrder extends StateOrder
{
    public function setState(StateOrder $state)
    {
        static::$state = $state;
    }

    public function getState(): StateOrder
    {
        return static::$state;
    }

    public function done()
    {
        static::$state->done();
    }

    public function getStatus(): string
    {
        return static::$state->getStatus();
    }
}