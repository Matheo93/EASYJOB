<?php

// src/Controller/CoverLetterController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CoverLetterController extends AbstractController
{
    #[Route('/generate-letter', name: 'generate_letter', methods: ['POST'])]
    public function generateLetterPost(Request $request)
    {
        $recipientName = $request->request->get('recipient_name');
        $jobPosition = $request->request->get('job_position');
        $motivations = $request->request->get('motivations');

        $user = $this->getUser();
        $userName = $user->getFirstName() . ' ' . $user->getLastName();

        // Générer la lettre
        $letterContent = "
        Cher/Chère $recipientName,

        Je me permets de vous contacter afin de postuler pour le poste de $jobPosition. 

        Mes motivations sont les suivantes : $motivations.

        En espérant pouvoir vous rencontrer prochainement.

        Cordialement,

        $userName
        ";

        return $this->render('cover_letter/result.html.twig', [
            'letterContent' => nl2br($letterContent)
        ]);
    }
}
