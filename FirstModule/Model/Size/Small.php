<?php


namespace Printq\FirstModule\Model\Size;


use Printq\FirstModule\Api\Size;

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
