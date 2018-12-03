<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * Date: 2018/12/3
 * Time: 23:56
 */

namespace DesignPatterns\Behavioral\State;


abstract class StateOrder
{
    private $details;

    /**
     * @var \DesignPatterns\Behavioral\State\StateOrder
     */
    protected static $state;

    abstract protected function done();

    protected function setStatus(string $status)
    {
        $this->details['status'] = $status;
        $this->details['updateTime'] = time();
    }

    protected function getStatus(): string
    {
        return $this->details['status'];
    }
}