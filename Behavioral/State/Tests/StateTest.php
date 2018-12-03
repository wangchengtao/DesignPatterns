<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * Date: 2018/12/4
 * Time: 0:10
 */

namespace DesignPatterns\Behavioral\State\Tests;


use DesignPatterns\Behavioral\State\ContextOrder;
use DesignPatterns\Behavioral\State\CreateOrder;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    public function testCanShipCreatedOrder()
    {
        $order = new CreateOrder();
        $contextOrder = new ContextOrder();
        $contextOrder->setState($order);
        $contextOrder->done();

        $this->assertEquals('shipping', $contextOrder->getStatus());
    }

    public function testCanCompleteShippedOrder()
    {
        $order = new CreateOrder();
        $contextOrder = new ContextOrder();
        $contextOrder->setState($order);
        $contextOrder->done();
        $contextOrder->done();

        $this->assertEquals('completed', $contextOrder->getStatus());
    }
}