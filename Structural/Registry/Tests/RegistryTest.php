<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * DateTime: 2018/11/25 19:10
 */

namespace DesignPatterns\Structural\Registry\Tests;


use DesignPatterns\Structural\Registry\Registry;
use PHPUnit\Framework\TestCase;

class RegistryTest extends TestCase
{
    public function testSetAndGetLogger()
    {
        $key = Registry::LOGGER;
        $logger = new \stdClass();
        Registry::set($key, $logger);
        $storedKey = Registry::get($key);

        $this->assertSame($logger, $storedKey);
        $this->assertInstanceOf(\stdClass::class, $storedKey);
    }

    public function testThrowsExceptionWhenTryingToSetInvalidKey()
    {
        Registry::set('foobar', new \stdClass());
    }

    public function testThrowsExceptionWhenTryToGetNotSetKey()
    {
        Registry::get(Registry::LOGGER);
    }
}