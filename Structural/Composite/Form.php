<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * DateTime: 2018/11/25 18:04
 */

namespace DesignPatterns\Structural\Composite;


class Form implements RenderableInterface
{
    /**
     * @var \DesignPatterns\Structural\Composite\RenderableInterface []
     */
    private $elements = [];

    public function addElement(RenderableInterface $element)
    {
        $this->elements[] = $element;
    }
    public function render(): string
    {
        $formCode = '<form>';

        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }

        $formCode .= '</form>';

        return $formCode;
    }
}