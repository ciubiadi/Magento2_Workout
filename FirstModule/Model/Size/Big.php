<?php


namespace Magciu\FirstModule\Model\Size;


use Magciu\FirstModule\Api\Size;

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
