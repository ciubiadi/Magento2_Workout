<?php


namespace Printq\FirstModule\Model;

use Printq\FirstModule\Api\Color;
use Printq\FirstModule\Api\Size;

class Book
{
    protected $color;

    protected $size;

    public function __construct(Color $color, Size $size)
    {
        $this->color = $color;
        $this->size = $size;
    }

}
