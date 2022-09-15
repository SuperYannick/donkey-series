<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/program', name: 'program_')]
class ProgramController extends AbstractController
{
    // #[Route('/', name: '_index')]
    // public function index(): Response
    // {
    //     return $this->render('program/index.html.twig', [
    //         'website' => 'Donkey Séries'
    //     ]);
    // }
    #[Route('/{id<\d+>}', name: 'show', methods: ['GET'])]
    public function show(int $id = 1): Response
    {
        return $this->render('program/show.html.twig', [
            'id' => $id,
            'website' => 'Donkey Séries'
        ]);
    }
}
