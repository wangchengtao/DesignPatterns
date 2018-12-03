<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * Date: 2018/12/3
 * Time: 23:35
 */

namespace DesignPatterns\Behavioral\Observer\Tests;


use DesignPatterns\Behavioral\Observer\User;
use DesignPatterns\Behavioral\Observer\UserObserver;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testChangeInUserLeadsToUserObserverBeingNotified()
    {
        $observer = new UserObserver();

        $user = new User();

        $user->attach($observer);

        $user->changeEmail('915129420@qq.com');

        $this->assertCount(1, $observer->getChangedUsers());
    }
}