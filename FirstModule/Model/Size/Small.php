<?php


namespace Magciu\FirstModule\Model\Size;


use Magciu\FirstModule\Api\Size;

class Small implements Size
{

    /**
     * @return mixed
     */
    public function getSize()
    {
        return 'small';
    }
}
