<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * Date: 2018/11/30
 * Time: 23:19
 */

namespace DesignPatterns\Structural\Bridge;


class PlainTextFormatter implements FormatterInterface
{
    public function format(string $text)
    {
        return $text;
    }
}