<?php


namespace Printq\FirstModule\Model\Size;


use Printq\FirstModule\Api\Size;

class Big implements  Size
{

    /**
     * @return mixed
     */
    public function getSize()
    {
        return 'Big';
    }
}
