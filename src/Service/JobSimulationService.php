<?php
// src/Service/JobSimulationService.php
namespace App\Service;

class JobSimulationService
{
    public function getSimulatedJobs(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Développeur Full Stack',
                'company' => 'TechCorp',
                'location' => 'Paris, France',
                'description' => 'Nous recherchons un développeur Full Stack expérimenté...',
            ],
            [
                'id' => 2,
                'title' => 'Data Scientist',
                'company' => 'DataInnovate',
                'location' => 'Lyon, France',
                'description' => 'Rejoignez notre équipe de Data Scientists pour travailler sur des projets innovants...',
            ],
            [
                'id' => 3,
                'title' => 'UX/UI Designer',
                'company' => 'DesignTech',
                'location' => 'Nice, France',
                'description' => 'Nous cherchons un designer créatif pour améliorer l\'expérience utilisateur...',
            ],
            [
                'id' => 4,
                'title' => 'Ingénieur DevOps',
                'company' => 'Cloudify',
                'location' => 'Marseille, France',
                'description' => 'Mettez en place et gérez l\'infrastructure cloud pour nos applications...',
            ],
            [
                'id' => 5,
                'title' => 'Chef de projet IT',
                'company' => 'TechLeaders',
                'location' => 'Paris, France',
                'description' => 'Coordonnez les projets IT et travaillez avec des équipes multidisciplinaires...',
            ],
            [
                'id' => 6,
                'title' => 'Développeur Mobile',
                'company' => 'AppFactory',
                'location' => 'Bordeaux, France',
                'description' => 'Développez des applications mobiles innovantes pour Android et iOS...',
            ],
            [
                'id' => 7,
                'title' => 'Architecte Cloud',
                'company' => 'CloudExperts',
                'location' => 'Toulouse, France',
                'description' => 'Concevez et gérez l\'architecture cloud de nos clients...',
            ],
            [
                'id' => 8,
                'title' => 'Développeur Backend',
                'company' => 'Backend Solutions',
                'location' => 'Lille, France',
                'description' => 'Travaillez sur des systèmes backend scalables et performants...',
            ],
            [
                'id' => 9,
                'title' => 'Spécialiste Cybersécurité',
                'company' => 'SecureIT',
                'location' => 'Nantes, France',
                'description' => 'Assurez la sécurité des systèmes et des réseaux pour nos clients...',
            ],
            [
                'id' => 10,
                'title' => 'Consultant SAP',
                'company' => 'ERP Consultants',
                'location' => 'Grenoble, France',
                'description' => 'Aidez nos clients à implémenter et optimiser leurs systèmes SAP...',
            ],
        ];
    }
}
