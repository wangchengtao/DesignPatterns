<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * DateTime: 2018/11/25 16:56
 */

namespace DesignPatterns\Structural\Adapter;


class Book implements BookInterface
{
    /**
     * @var int
     */
    private $page;

    public function trunPage()
    {
        $this->page++;
    }

    public function open()
    {
        $this->page = 1;
    }

    public function getPage(): int
    {
        return $this->page;
    }
}