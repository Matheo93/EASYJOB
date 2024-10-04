<?php
// src/Controller/FavoriteController.php
namespace App\Controller;

use App\Entity\Favorite;
use App\Entity\JobOffer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class FavoriteController extends AbstractController
{
    #[Route('/favorite/toggle/{id}', name: 'app_favorite_toggle', methods: ['POST'])]
    public function toggle(int $id, EntityManagerInterface $entityManager): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            return new JsonResponse(['error' => 'User not authenticated'], 401);
        }

        $jobOffer = $entityManager->getRepository(JobOffer::class)->find($id);
        if (!$jobOffer) {
            return new JsonResponse(['error' => 'Job offer not found'], 404);
        }

        $favorite = $entityManager->getRepository(Favorite::class)->findOneBy([
            'user' => $user,
            'jobOffer' => $jobOffer,
        ]);

        if ($favorite) {
            $entityManager->remove($favorite);
            $isFavorite = false;
        } else {
            $favorite = new Favorite();
            $favorite->setUser($user);
            $favorite->setJobOffer($jobOffer);
            $entityManager->persist($favorite);
            $isFavorite = true;
        }

        $entityManager->flush();

        return new JsonResponse(['isFavorite' => $isFavorite]);
    }
}