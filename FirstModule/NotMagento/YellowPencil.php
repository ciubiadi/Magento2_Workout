<?php


namespace Printq\FirstModule\NotMagento;


class YellowPencil implements PencilInterface
{
    public function getPencilType()
    {
        return "Yellow pencil";
    }
}
