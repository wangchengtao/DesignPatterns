<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * Date: 2018/11/30
 * Time: 23:19
 */

namespace DesignPatterns\Structural\Bridge;


abstract class Service
{
    /**
     * @var \DesignPatterns\Structural\Bridge\FormatterInterface
     */
    protected $implementation;

    public function __construct(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }

    /**
     * 和构造方法的作用相同
     * @param \DesignPatterns\Structural\Bridge\FormatterInterface $printer
     */
    public function setImplementation(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }

    abstract public function get();
}