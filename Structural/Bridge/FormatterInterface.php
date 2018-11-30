<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * Date: 2018/11/30
 * Time: 23:18
 */

namespace DesignPatterns\Structural\Bridge;


interface FormatterInterface
{
    public function format(string $text);
}