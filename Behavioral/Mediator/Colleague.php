<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * Date: 2018/12/5
 * Time: 23:42
 */

namespace DesignPatterns\Behavioral\Mediator;


abstract class Colleague
{
    /**
     * @var \DesignPatterns\Behavioral\Mediator\MediatorInterface
     */
    protected $mediator;

    public function setMediator(MediatorInterface $mediator)
    {
        $this->mediator = $mediator;
    }
}