<?php

namespace App\Controller;

use App\Entity\JobOffer;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FavoriteController extends AbstractController
{
    #[Route('/favorites', name: 'app_favorites')]
    public function index(): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        return $this->render('favorite/index.html.twig', [
            'favorites' => $user->getFavorites(),
        ]);
    }

    #[Route('/favorite/toggle/{id}', name: 'app_favorite_toggle', methods: ['POST'])]
    public function toggle(JobOffer $jobOffer, EntityManagerInterface $entityManager): JsonResponse
    {
        /** @var User $user */
        $user = $this->getUser();
        if (!$user) {
            return $this->json(['success' => false, 'message' => 'User not authenticated'], Response::HTTP_UNAUTHORIZED);
        }

        $isFavorite = $user->getFavorites()->contains($jobOffer);

        if ($isFavorite) {
            $user->removeFavorite($jobOffer);
        } else {
            $user->addFavorite($jobOffer);
        }

        $entityManager->flush();

        return $this->json([
            'success' => true,
            'isFavorite' => !$isFavorite
        ]);
    }
}