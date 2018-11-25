<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * DateTime: 2018/11/25 17:14
 */

namespace DesignPatterns\Cretional\Adapter\Tests;


use DesignPatterns\Cretional\Adapter\Book;
use DesignPatterns\Cretional\Adapter\EBookAdapter;
use DesignPatterns\Cretional\Adapter\Kindle;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testCanTurnPageOnBook()
    {
        $book = new Book();
        $book->open();
        $book->trunPage();

        $this->assertEquals(2, $book->getPage());
    }

    public function testCanTurnPageOnKindleLikeInANormalBook()
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);
        $book->open();
        $book->trunPage();

        $this->assertEquals(2, $book->getPage());

    }
}