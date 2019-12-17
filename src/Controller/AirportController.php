<?php

namespace App\Controller;

use App\Entity\Airport;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AirportController extends AbstractController {
    public function displayAirportList()
    {

        $airport = [
            new Airport(1, "100", "ORLY"),
            new Airport(2, "200", "YUL"),
            new Airport(3, "300", "MRS"),
        ];

        return $this->json($airport);
    }
}