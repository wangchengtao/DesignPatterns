<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/29
 * Time: 23:23
 */

namespace DesignPatterns\Structural\DataMapper;


class User
{
    private $email;

    private $username;

    public function __construct(string $username, string $email)
    {
        // 先验证参数再设置他们

        $this->username = $username;
        $this->email = $email;
    }

    public static function fromState(string $state): User
    {
        // 在你访问的时候验证状态

        return new self(
            $state['username'],
            $state['email']
        );
    }

    public function getUserName()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }
}