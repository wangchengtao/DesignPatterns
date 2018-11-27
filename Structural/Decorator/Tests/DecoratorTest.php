<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/27
 * Time: 22:39
 */

namespace DesignPatterns\Structural\Decorator\Tests;


use DesignPatterns\Structural\Decorator\JsonRenderer;
use DesignPatterns\Structural\Decorator\Webservice;
use DesignPatterns\Structural\Decorator\XmlRenderer;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    private $service;

    protected function setUp()
    {
        $this->service = new Webservice('foobar');
    }

    public function testJsonDecorator()
    {
        $service = new JsonRenderer($this->service);

        $this->assertEquals('"foobar"', $service->renderData());
    }

    public function testXmlDecorator()
    {
        $service = new XmlRenderer($this->service);

        $this->assertXmlStringEqualsXmlString('<?xml version="1.0"?><content>foobar</content>', $service->renderData());
    }
}