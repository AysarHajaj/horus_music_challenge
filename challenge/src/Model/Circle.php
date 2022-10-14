<?php

namespace App\Model;

class Circle implements ShapeInterface
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateSurface()
    {
        return round((pi() * pow($this->radius, 2)), 2);
    }

    public function calculateCircumference()
    {
        return round((2 * pi() * $this->radius), 2);
    }
}
