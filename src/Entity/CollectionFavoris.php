<?php

namespace App\Entity;

use App\Repository\CollectionFavorisRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CollectionFavorisRepository::class)
 */
class CollectionFavoris
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="collectionFavoris")
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity=Works::class)
     */
    private $relationWorks;

    public function __construct()
    {
        $this->relationWorks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(?user $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|Works[]
     */
    public function getRelationWorks(): Collection
    {
        return $this->relationWorks;
    }

    public function addRelationWork(Works $relationWork): self
    {
        if (!$this->relationWorks->contains($relationWork)) {
            $this->relationWorks[] = $relationWork;
        }

        return $this;
    }

    public function removeRelationWork(Works $relationWork): self
    {
        $this->relationWorks->removeElement($relationWork);

        return $this;
    }
}
