<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * DateTime: 2018/12/4 14:58
 */

namespace DesignPatterns\Behavioral\Command;

/**
 * 调用者使用这种命令
 */
class Invoker
{
    /**
     * @var CommandInterface
     */
    private $command;

    /**
     * 在这种调用者中, 订阅命令也是这种方法
     *
     * @param CommandInterface $cmd
     */
    public function setCommand(CommandInterface $cmd)
    {
        $this->command = $cmd;
    }

    /**
     * 执行这个命令
     * 调用者也是用这个命令
     */
    public function run()
    {
        $this->command->execute();
    }
}