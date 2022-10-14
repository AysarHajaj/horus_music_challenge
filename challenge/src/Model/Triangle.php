<?php

namespace App\Model;

class Triangle implements ShapeInterface
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function calculateSurface()
    {
        //Heron’s Formula
        $circumference = $this->calculateCircumference();
        $semiCircumference = $circumference / 2;
        $semiDiffA = $semiCircumference - $this->a;
        $semiDiffB = $semiCircumference - $this->b;
        $semiDiffC = $semiCircumference - $this->c;
        $surface = sqrt($semiCircumference * $semiDiffA * $semiDiffB * $semiDiffC);

        return round($surface, 2);
    }

    public function calculateCircumference()
    {
        return round(($this->a + $this->b + $this->c), 2);
    }
}
