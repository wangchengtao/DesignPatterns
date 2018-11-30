<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * Date: 2018/11/30
 * Time: 23:19
 */

namespace DesignPatterns\Structural\Bridge;


class HelloWorldService extends Service
{
    public function get()
    {
        return $this->implementation->format('Hello World');
    }
}