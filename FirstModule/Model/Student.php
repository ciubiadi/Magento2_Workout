<?php


namespace Magciu\FirstModule\Model;


class Student
{
    private $name;

    private $age;

    private $scores;

    public function __construct(
        $name = "Albert",
        $age = 24,
        array $scores = array('maths' => 92, 'programming' => 90)
    )
    {
        $this->name = $name;
        $this->age = $age;
        $this->scores = $scores;
    }
}
