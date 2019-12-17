<?php


namespace App\Controller;


use App\Entity\Pilot;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PilotController extends AbstractController
{
    public function displayPilotList()
    {

        $pilot = [
            new Pilot(1, "George", "JOUL", "15/12/1970", "", "", ""),
            new Pilot(2, "Aaron", "GUI", "11/12/1970", "", "", ""),
            new Pilot(3, "Patrick", "APO", "19/12/1970", "", "", "")
        ];

        return $this->json($pilot);
    }
}