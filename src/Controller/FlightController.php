<?php


namespace App\Controller;


use App\Entity\Flight;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FlightController extends AbstractController
{
    public function displayFlightList()
    {

        $flight = [
            new Flight(1, "MRS", "ORLY", "15:00", "MRS-ORLY", "Goerges"),
            new Flight(2, "MRS", "YUL", "17:00", "MRS-YUL", "Aaron"),
            new Flight(3, "YUL", "ORLY", "15:00", "YUL-ORLY", "Patrick")
        ];

        return $this->json($flight);
    }
}