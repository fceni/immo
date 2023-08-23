<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Vote;

class VoteController extends AbstractController
{
//    #[Route('/vote', name: 'app_vote')]
//    public function index(): Response
//    {
//        return $this->render('vote/index.html.twig', [
//            'controller_name' => 'VoteController',
//        ]);
//    }
//
//
//
//class VoteController extends AbstractController
//{
    public function recordVoteAction(Request $request): Response
    {
        $videoId = $request->request->get('videoId');
        $membreId = $this->getMembre()->getId(); // suppose que l'utilisateur est connecté

        $vote = new Vote();
        $vote->setVideoId($videoId);
        $vote->setMembreId($membreId);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($vote);
        $entityManager->flush();

        return new Response('Vote enregistré');
    }

}
