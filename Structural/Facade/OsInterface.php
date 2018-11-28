<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/28
 * Time: 23:21
 */

namespace DesignPatterns\Structural\Facade;


interface OsInterface
{
    public function halt();

    public function getName(): string;
}