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
            // Ajoutez d'autres offres d'emploi simulées ici
        ];
    }
}