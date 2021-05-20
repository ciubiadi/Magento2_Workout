<?php


namespace Magciu\FirstModule\Model\Color;


use Magciu\FirstModule\Api\Color;
use Magciu\FirstModule\Api\Brightness;

class Yellow implements Color
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
        return 'Yellow';
    }
}
