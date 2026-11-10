<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProjetController extends AbstractController
{
    #[Route('/projet/{id}', name: 'projet_detail')]
    public function detail(string $id): Response
    {
        $projets = [
            'application-gestion' => [
                'titre' => 'Application web de gestion',
                'description' => 'Application de gestion d’étudiants, de cours et de modules.',
                'technologies' => ['PHP', 'POO', 'SQL', 'HTML', 'CSS'],
                'temps' => 'À compléter',
                'github' => 'https://github.com/justinthomas22/Application_Web_avec_Persistance_en_POO',
            ],
            'algorithme-graphes' => [
                'titre' => 'SAE Algorithmique et graphes',
                'description' => 'Projet Python autour des algorithmes sur les graphes.',
                'technologies' => ['Python'],
                'temps' => 'À compléter',
                'github' => 'https://github.com/justinthomas22/SAE_AlgoGraphe',
            ],
            'r203' => [
                'titre' => 'Projet R2.03',
                'description' => 'Projet de programmation orientée objet en Java.',
                'technologies' => ['Java'],
                'temps' => 'À compléter',
                'github' => 'https://github.com/justinthomas22/R2.03',
            ],
            'premiers-sites' => [
                'titre' => 'Mes premiers sites web',
                'description' => 'Création de trois sites web en HTML et CSS.',
                'technologies' => ['HTML', 'CSS'],
                'temps' => 'À compléter',
                'github' => 'https://github.com/justinthomas22',
            ],
        ];

        if (!isset($projets[$id])) {
            throw $this->createNotFoundException('Projet introuvable.');
        }

        return $this->render('projet/detail.html.twig', [
            'projet' => $projets[$id],
        ]);
    }
}
