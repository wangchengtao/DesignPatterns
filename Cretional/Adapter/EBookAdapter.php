<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * DateTime: 2018/11/25 17:09
 */

namespace DesignPatterns\Cretional\Adapter;


class EBookAdapter implements BookInterface
{
    /**
     * @var
     */
    protected $ebook;

    public function __construct(EBookInterface $ebook)
    {
        $this->ebook = $ebook;
    }

    public function trunPage()
    {
        $this->ebook->pressNext();
    }

    public function open()
    {
        $this->ebook->unlock();
    }

    public function getPage(): int
    {
        return $this->ebook->getPage()[0];
    }

}