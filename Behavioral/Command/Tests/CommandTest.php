<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * DateTime: 2018/12/4 15:38
 */

namespace DesignPatterns\Behavioral\Command\Tests;


use DesignPatterns\Behavioral\Command\HelloCommand;
use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testInvocation()
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $receiver->enableDate();
        $invoker->run();

        $this->assertEquals('Hello World', $receiver->getOutput());
    }
}