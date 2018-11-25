<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * DateTime: 2018/11/25 19:01
 */

namespace DesignPatterns\Structural\Registry;


abstract class Registry
{
    const LOGGER = 'logger';

    private static $storeValues = [];

    private static $allowedKeys = [
        self::LOGGER,
    ];

    public static function set($key, $value)
    {
        if (! in_array($key, self::$allowedKeys)) {
            throw new \InvalidArgumentException('Invalid key given');
        }

        self::$storeValues[$key] = $value;
    }

    public static function get($key)
    {
        if (!in_array($key, self::$allowedKeys) || !isset(self::$storeValues[$key])) {
            throw new \InvalidArgumentException('Invalid key given');
        }

        return self::$storeValues[$key];
    }
}