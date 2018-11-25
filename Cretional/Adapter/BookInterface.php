<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * DateTime: 2018/11/25 16:45
 */

namespace DesignPatterns\Cretional\Adapter;


interface BookInterface
{
    public function trunPage();

    public function open();

    public function getPage(): int;
}