<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * DateTime: 2018/12/4 14:58
 */

namespace DesignPatterns\Behavioral\Command;

/**
 * Class Receiver
 * 接收方是特定的服务, 有自己的 contract, 只能是具体的实例
 */
class Receiver
{
    private $enableDate = false;

    private $output = [];

    public function write(string $str)
    {
        if ($this->enableDate) {
            $str .= ' [' . date('Y-m-d') . ']';
        }

        $this->output[] = $str;
    }

    public function getOutput(): string
    {
        return join("\n", $this->output);
    }

    /**
     * 可以显示时间的消息
     */
    public function enableDate()
    {
        $this->enableDate = true;
    }

    /**
     * 禁止显示时间的消息
     */
    public function disableDate()
    {
        $this->enableDate = false;
    }
}