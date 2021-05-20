<?php


namespace Magciu\FirstModule\Model;

use Magciu\FirstModule\Api\Color;
use Magciu\FirstModule\Api\Size;

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
