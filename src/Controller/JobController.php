<?php
// src/Controller/JobController.php
namespace App\Controller;

use App\Service\JobSimulationService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JobController extends AbstractController
{
    #[Route('/jobs', name: 'app_jobs')]
    public function index(JobSimulationService $jobService): Response
    {
        $jobs = $jobService->getSimulatedJobs();

        return $this->render('job/index.html.twig', [
            'jobs' => $jobs,
        ]);
    }
}