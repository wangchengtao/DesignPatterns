<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * Date: 2018/12/5
 * Time: 23:54
 */

namespace DesignPatterns\Behavioral\Mediator\Tests;


use DesignPatterns\Behavioral\Mediator\Client;
use DesignPatterns\Behavioral\Mediator\Database;
use DesignPatterns\Behavioral\Mediator\Mediator;
use DesignPatterns\Behavioral\Mediator\Server;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testOutputHelloWorld()
    {
        $client = new Client();
        new Mediator(new Database(), $client, new Server());

        $this->expectOutputString('Hello World');
        $client->request();
    }
}