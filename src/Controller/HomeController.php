<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\JobSimulationService;
use App\Entity\User;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(JobSimulationService $jobSimulationService): Response
    {
        $user = $this->getUser();
        $category = 'all';
        
        if ($user instanceof User) {
            $category = $user->getCategory() ?? 'all';
        }
        
        $jobs = $jobSimulationService->getSimulatedJobs();

        return $this->render('home/index.html.twig', [
            'jobs' => $jobs,
            'category' => $category,
        ]);
    }
}