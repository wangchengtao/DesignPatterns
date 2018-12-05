<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * Date: 2018/12/5
 * Time: 23:37
 */

namespace DesignPatterns\Behavioral\Mediator;


interface MediatorInterface
{
    public function sendResponse($content);

    public function makeRequest();

    public function queryDb();
}