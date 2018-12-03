<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * Date: 2018/12/4
 * Time: 0:03
 */

namespace DesignPatterns\Behavioral\State;


class CreateOrder extends StateOrder
{
    public function __construct()
    {
        $this->setStatus('created');
    }

    public function done()
    {
        static::$state = new ShippingOrder();
    }
}