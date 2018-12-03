<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * Date: 2018/12/4
 * Time: 0:03
 */

namespace DesignPatterns\Behavioral\State;


class ShippingOrder extends StateOrder
{
    public function __construct()
    {
        $this->setStatus('shipping');
    }

    public function done()
    {
        $this->setStatus('completed');
    }
}