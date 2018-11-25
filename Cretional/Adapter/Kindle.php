<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * DateTime: 2018/11/25 16:48
 */

namespace DesignPatterns\Cretional\Adapter;

class Kindle implements EBookInterface
{
    private $totalPages = 100;

    private $page = 1;

    public function pressNext()
    {
        $this->page++;
    }

    public function unlock()
    {

    }

    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}