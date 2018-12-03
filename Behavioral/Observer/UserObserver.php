<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * Date: 2018/12/3
 * Time: 23:35
 */

namespace DesignPatterns\Behavioral\Observer;


class UserObserver implements \SplObserver
{
    private $changedUsers = [];

    public function update(\SplSubject $subject)
    {
        $this->changedUsers[] = $subject;
    }

    public function getChangedUsers(): array
    {
        return $this->changedUsers;
    }
}