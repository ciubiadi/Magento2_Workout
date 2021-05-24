<?php


namespace Printq\FirstModule\Model\Color;


use Printq\FirstModule\Api\Color;
use Printq\FirstModule\Api\Brightness;

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
