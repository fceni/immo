<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

class MainController extends AbstractController
{
    #[Route('/', name: 'main_home')]
    public function home(): Response
    {
        return $this->render("main/home.html.twig");
    }

    #[Route('/test', name: 'main_test')]
    public function test(): Response
    {
        $username= 'Makerz';
        $immo= ["title" => "Nouveau projet", "year" => 2023];

        return $this->render("main/test.html.twig", [
            "nameOfUser"=>$username,
            "myImmo"=>$immo
            ]);

    }


//    #[Route('/test', name: 'main_test')]
//    public function index(): Response
//    {
//        $now = new \DateTime();
//        $targetDate = (new \DateTime())->modify('+1 month');
//        $interval = $targetDate->diff($now);
//
//        return $this->render('main/test.html.twig', [
//            'interval'=>$interval,
//        ]);
//    }



}
