<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * Date: 2018/12/5
 * Time: 22:41
 */

namespace DesignPatterns\Behavioral\Strategy;


class IdComparator implements ComparatorInterface
{
    public function compare($a, $b): int
    {
        return $a['id'] <=> $b['id'];
    }
}