<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * DateTime: 2018/11/25 16:08
 */

namespace DesignPatterns\Cretional\StaticFactory;


class StaticFactory
{
    /**
     * @param $type
     * @return FormatNumber|FormatString
     // * @throws \Exception
     */
    public static function factory($type): FormatterInterface
    {
        switch ($type) {
            case 'string':
                return new FormatString();
            case 'number':
                return new FormatNumber();
            default:
                throw new \InvalidArgumentException('该工厂不支持' . "\n");
        }
    }
}