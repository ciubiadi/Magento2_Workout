<?php


namespace Printq\FirstModule\Model;


use Printq\FirstModule\Api\Color;
use Printq\FirstModule\Api\PencilInterface;
use Printq\FirstModule\Api\Size;

class Pencil implements PencilInterface
{
    protected $color;

    protected $size;

    protected $name;

    protected $school;

    public function __construct(Color $color, Size $size, $name = null, $school = null)
    {
        $this->color = $color;
        $this->size  = $size;
        $this->name  = $name;
        $this->school  = $school;
    }

    public function getPencilType()
    {
        return 'Our pencil has color ' . $this->color->getColor() . ' and size ' . $this->size->getSize();
    }
}
