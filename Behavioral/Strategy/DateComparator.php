<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * Date: 2018/12/5
 * Time: 22:39
 */

namespace DesignPatterns\Behavioral\Strategy;


class DateComparator implements ComparatorInterface
{
    public function compare($a, $b): int
    {
        $aDate = new \DateTime($a['date']);
        $bDate = new \DateTime($b['date']);

        return $aDate <=> $bDate;
    }
}