<?php
// src/Entity/Favorite.php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Favorite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'favorites')]
    private $user;

    #[ORM\ManyToOne(targetEntity: JobOffer::class)]
    private $jobOffer;

    public function setUser(?User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function setJobOffer(?JobOffer $jobOffer): self
    {
        $this->jobOffer = $jobOffer;
        return $this;
    }

    // Getters and setters
}