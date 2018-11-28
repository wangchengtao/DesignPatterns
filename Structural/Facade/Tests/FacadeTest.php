<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/28
 * Time: 23:21
 */

namespace DesignPatterns\Structural\Facade\Tests;


use DesignPatterns\Structural\Facade\Facade;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testComputerOn()
    {
        $os = $this->createMock('DesignPatterns\Structural\Facade\OsInterface');

        $os->method('getName')->will($this->returnValue('Linux'));

        $bios = $this->getMockBuilder('DesignPatterns\Structural\Facade\BiosInterface')->setMethods(['launch', 'execute', 'waitForKeyPress'])->disableAutoload()->getMock();

        $bios->expects($this->once())->method('launch')->with($os);

        $facade = new Facade($bios, $os);

        $facade->turnOn();

        $this->assertEquals('Linux', $os->getName());
    }
}