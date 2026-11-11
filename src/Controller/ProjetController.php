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
                'image' => 'site_API.png',
                'description' => "Développement d'une application web permettant de consulter et gérer des données sportives, d'exploiter des statistiques et de réaliser des prédictions à partir de résultats historiques.",
                'presentation' => "Dans le cadre d'une SAÉ de deuxième année de BUT Informatique, réalisation en équipe d'une application web full-stack reposant sur une architecture composée de trois services : une interface web en PHP, une API REST développée avec Node.js et TypeScript, ainsi qu'une base de données PostgreSQL.\n" .
                                    "L'application a pour objectif de collecter, stocker et exploiter des données réelles afin de permettre leur consultation, leur gestion et la production d'indicateurs ou de prédictions statistiques.",
                'competences' => "- Développement d'une application web full-stack.\n" .
                                    "- Conception et utilisation d'une API REST.\n" .
                                    "- Manipulation d'une base de données relationnelle.\n" .
                                    "- Développement backend avec Node.js et TypeScript.\n" .
                                    "- Développement frontend et backend avec PHP.\n" .
                                    "- Organisation d'un projet informatique en équipe.",
                'technologies' => ['Node.js','PHP', 'API Rest', 'PostgreSQL', 'Docker'],
                'temps' => '1 Semaine',
                'personnes' => 4,
                'github' => 'https://github.com/justinthomas22/Site-web-API',
            ],
            'doc2quiz' => [
                'titre' => 'Doc2Quiz',
                'image' => 'Doc2Quiz.png',
                'description' => 'Projet Python autour des algorithmes sur les graphes.',
                'presentation' => "Dans le cadre de ce projet, nous avons développé une application pédagogique permettant aux enseignants de générer automatiquement des questionnaires à partir de leurs supports de cours.\n\nL'application s'appuie sur des modèles de langage (LLM) exécutés avec Ollama afin d'analyser les documents, d'en extraire les informations importantes et de produire des questions d'auto-évaluation.\n",

                'competences' => "- Développement d'une application Python.\n" .
                                "- Intégration et utilisation de modèles d'intelligence artificielle (LLM).\n" .
                                "- Traitement et extraction de contenu à partir de documents.\n" .
                                "- Utilisation d'une base de données NoSQL.\n" .
                                "- Développement d'une interface utilisateur avec Gradio.\n" .
                                "- Mise en place de tests automatisés avec Pytest.\n" .
                                "- Organisation et structuration d'un projet logiciel.",
                'technologies' => ['Python', 'IA', 'Ollama', 'Gradio', 'NoSQL'],
                'temps' => 'Une centaine d\'heures',
                'personnes' => 4,
                'github' => 'https://github.com/armandddev/11_Doc2Quiz',
            ],
            'r203' => [
                'titre' => 'Projet R2.03',
                'image' => null,
                'description' => 'Projet de programmation orientée objet en Java.',
                'presentation' => "",
                'competences' => "",
                'technologies' => ['Java'],
                'temps' => 'À compléter',
                'personnes' => 1,
                'github' => 'https://github.com/justinthomas22/R2.03',
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
