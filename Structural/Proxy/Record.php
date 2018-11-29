<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/29
 * Time: 21:17
 */

namespace DesignPatterns\Structural\Proxy;


class Record
{
    private $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function __set(string $name, string $value)
    {
        $this->data[$name] = $value;
    }

    public function __get(string $name)
    {
        if (! isset($this->data[$name])) {
            throw new \OutOfRangeException('Invalid name given');
        }

        return $this->data[$name];
    }
}