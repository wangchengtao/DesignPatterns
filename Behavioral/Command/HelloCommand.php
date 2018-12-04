<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * DateTime: 2018/12/4 14:57
 */

namespace DesignPatterns\Behavioral\Command;


class HelloCommand implements CommandInterface
{
    private $output;

    public function __construct(Receiver $console)
    {
        $this->output = $console;
    }

    /**
     * 执行和输出 "hello world"
     */
    public function execute()
    {
        // 有时候，这里没有接收者，并且这个命令执行所有工作
        $this->output->write('Hello World');
    }
}