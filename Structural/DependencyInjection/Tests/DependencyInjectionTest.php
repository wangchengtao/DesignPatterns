<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * Date: 2018/12/3
 * Time: 23:25
 */

namespace DesignPatterns\Structural\DependencyInjection\Tests;


use DesignPatterns\Structural\DependencyInjection\DatabaseConfiguration;
use DesignPatterns\Structural\DependencyInjection\DatabaseConnection;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection()
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'wangchengtao', '1234');

        $connection = new DatabaseConnection($config);

        $this->assertEquals('wangchengtao:1234@localhost:3306', $connection->getDsn());
    }
}