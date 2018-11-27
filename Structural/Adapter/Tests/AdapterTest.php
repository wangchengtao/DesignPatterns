<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * DateTime: 2018/11/25 17:14
 */

namespace DesignPatterns\Structural\Adapter\Tests;


use DesignPatterns\Structural\Adapter\Book;
use DesignPatterns\Structural\Adapter\EBookAdapter;
use DesignPatterns\Structural\Adapter\Kindle;
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