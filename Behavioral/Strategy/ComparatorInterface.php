<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * Date: 2018/12/5
 * Time: 22:26
 */

namespace DesignPatterns\Behavioral\Strategy;


interface ComparatorInterface
{
    public function compare($a, $b): int;
}