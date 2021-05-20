<?php


namespace Magciu\FirstModule\Model;


use Magciu\FirstModule\Api\Color;
use Magciu\FirstModule\Api\PencilInterface;
use Magciu\FirstModule\Api\Size;

class Pencil implements PencilInterface
{
    protected $color;

    protected $size;

    public function __construct(Color $color, Size $size)
    {
        $this->color = $color;
        $this->size  = $size;
    }

    public function getPencilType()
    {
        return 'Our pencil has color ' . $this->color->getColor() . ' and size ' . $this->size->getSize();
    }
}
