<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RandomNumberController extends AbstractController
{
    #[Route('/random/number', name: 'app_random_number')]
    public function index(): Response
    {
        $num = random_int(0, 100);
        $link = "http://localhost:8000";
        return $this->render('random_number/index.html.twig', [
            'controller_name' => 'Your Majesty',
            'random' => $num,
            'base' => $link,
        ]);
    }

    #[Route('/random', name: 'app_random')]
    public function random(): Response
    {
        $link = "http://localhost:8000";
        return $this->render('random_number/random.html.twig', [
            'controller_name' => 'Your Majesty',
            'base' => $link,
        ]);
    }
}
