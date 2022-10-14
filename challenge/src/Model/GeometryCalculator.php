<?php

namespace App\Model;

class GeometryCalculator
{
    public static function calculateSumOfAreas($shapeA, $shapeB)
    {
        return $shapeA->calculateSurface() + $shapeB->calculateSurface();
    }

    public static function calculateSumOfDiameters($shapeA, $shapeB)
    {
        return $shapeA->calculateCircumference() + $shapeB->calculateCircumference();
    }
}
