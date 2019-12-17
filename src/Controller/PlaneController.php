<?php


namespace App\Controller;


use App\Entity\Plane;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PlaneController extends AbstractController
{
    public function displayPlaneList()
    {

        $plane = [
            new Plane(1, "Air France", "Boeing 659", "150", "Airbus"),
            new Plane(2, "Air Transat", "Boeing 1000", "250", "Airbus")
        ];

        return $this->json($plane);
    }
}