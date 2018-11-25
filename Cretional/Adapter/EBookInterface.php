<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * DateTime: 2018/11/25 16:45
 */

namespace DesignPatterns\Cretional\Adapter;


interface EBookInterface
{
    public function unlock();

    public function pressNext();

    /**
     * 返回当前页和总页数
     * @return array
     */
    public function getPage(): array;
}