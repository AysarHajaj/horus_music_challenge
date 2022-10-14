<?php

namespace App\Controller;

use App\Model\Circle;
use App\Model\Triangle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ShapeController extends AbstractController
{
    /**
     * @Route("/triangle/{a}/{b}/{c}", name="triangle", methods="GET")
     */
    public function getTriangleData($a, $b, $c): JsonResponse
    {
        $triangle = new Triangle($a, $b, $c);
        return $this->json([
            "type" => "triangle",
            "a" => $a,
            "b" => $b,
            "c" => $c,
            "surface" => $triangle->calculateSurface(),
            "circumference" => $triangle->calculateCircumference(),
        ]);
    }

    /**
     * @Route("/circle/{radius}", name="circle", methods="GET")
     */
    public function getCircleData($radius): JsonResponse
    {
        $circle = new Circle($radius);
        return $this->json([
            "type" => "circle",
            "radius" =>  $radius,
            "surface" => $circle->calculateSurface(),
            "circumference" => $circle->calculateCircumference(),
        ]);
    }
}
