<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * DateTime: 2018/11/25 18:18
 */

namespace DesignPatterns\Structural\Composite\Tests;


use DesignPatterns\Structural\Composite\Form;
use DesignPatterns\Structural\Composite\InputElement;
use DesignPatterns\Structural\Composite\TextElement;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testRender()
    {
        $form = new Form();
        $form->addElement(new TextElement('Email: '));
        $form->addElement(new InputElement());

        $embed = new Form();
        $embed->addElement(new TextElement('Password: '));
        $embed->addElement(new InputElement());
        $form->addElement($embed);

        $this->assertEquals(
            '<form>Email: <input type="text" /><form>Password: <input type="text" /></form></form>',
            $form->render()
        );
    }
}