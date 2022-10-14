<?php

namespace App\Model;

class GeometryCalculator
{
    private $shapeA;
    private $shapeB;

    public function __construct($shapeA, $shapeB)
    {
        $this->shapeA = $shapeA;
        $this->shapeB = $shapeB;
    }

    public function calculateSumOfAreas()
    {
        return $this->shapeA->calculateSurface() + $this->shapeB->calculateSurface();
    }

    public function calculateSumOfDiameters()
    {
        return $this->shapeA->calculateCircumference() + $this->shapeB->calculateCircumference();
    }
}
