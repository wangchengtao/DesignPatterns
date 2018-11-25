<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * DateTime: 2018/11/25 16:19
 */

namespace DesignPatterns\Cretional\StaticFactory\Tests;


use DesignPatterns\Cretional\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateNumberFormatNumber()
    {
        $this->assertInstanceOf(
            'DesignPatterns\Cretional\StaticFactory\FormatNumber',
            StaticFactory::factory('number')
        );
    }

    public function testCanCreateStringFormatter()
    {
        $this->assertInstanceOf(
            'DesignPatterns\Cretional\StaticFactory\FormatString',
            StaticFactory::factory('string')
        );
    }

    public function testException()
    {
        StaticFactory::factory('object');
    }
}