<?php


namespace Magciu\FirstModule\Model\Color;


use Magciu\FirstModule\Api\Brightness;
use Magciu\FirstModule\Api\Color;

class Blue implements Color
{
    protected $brightness;

    public function __construct(Brightness $brightness)
    {
        $this->brightness = $brightness;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        // TODO: Implement getColor() method.
    }
}
