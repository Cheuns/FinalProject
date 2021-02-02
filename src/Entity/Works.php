<?php

namespace App\Entity;

use App\Repository\WorksRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WorksRepository::class)
 */
class Works
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Category;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Origin;

    /**
     * @ORM\Column(type="text")
     */
    private $Abstract;

    /**
     * @ORM\ManyToMany(targetEntity=collectionfavoris::class, inversedBy="works")
     */
    private $collectionfavoris;

    /**
     * @ORM\OneToMany(targetEntity=Mangas::class, mappedBy="works", orphanRemoval=true)
     */
    private $mangas;

    /**
     * @ORM\OneToMany(targetEntity=Animes::class, mappedBy="works", orphanRemoval=true)
     */
    private $animes;

    public function __construct()
    {
        $this->works = new ArrayCollection();
        $this->collectionfavoris = new ArrayCollection();
        $this->mangas = new ArrayCollection();
        $this->animes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->Category;
    }

    public function setCategory(string $Category): self
    {
        $this->Category = $Category;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): self
    {
        $this->Type = $Type;

        return $this;
    }

    public function getOrigin(): ?string
    {
        return $this->Origin;
    }

    public function setOrigin(string $Origin): self
    {
        $this->Origin = $Origin;

        return $this;
    }

    public function getAbstract(): ?string
    {
        return $this->Abstract;
    }

    public function setAbstract(string $Abstract): self
    {
        $this->Abstract = $Abstract;

        return $this;
    }

    /**
     * @return Collection|collectionfavoris[]
     */
    public function getCollectionfavoris(): Collection
    {
        return $this->collectionfavoris;
    }

    public function addCollectionfavori(collectionfavoris $collectionfavori): self
    {
        if (!$this->collectionfavoris->contains($collectionfavori)) {
            $this->collectionfavoris[] = $collectionfavori;
        }

        return $this;
    }

    public function removeCollectionfavori(collectionfavoris $collectionfavori): self
    {
        $this->collectionfavoris->removeElement($collectionfavori);

        return $this;
    }

    /**
     * @return Collection|Mangas[]
     */
    public function getMangas(): Collection
    {
        return $this->mangas;
    }

    public function addManga(Mangas $manga): self
    {
        if (!$this->mangas->contains($manga)) {
            $this->mangas[] = $manga;
            $manga->setWorks($this);
        }

        return $this;
    }

    public function removeManga(Mangas $manga): self
    {
        if ($this->mangas->removeElement($manga)) {
            // set the owning side to null (unless already changed)
            if ($manga->getWorks() === $this) {
                $manga->setWorks(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Animes[]
     */
    public function getAnimes(): Collection
    {
        return $this->animes;
    }

    public function addAnime(Animes $anime): self
    {
        if (!$this->animes->contains($anime)) {
            $this->animes[] = $anime;
            $anime->setWorks($this);
        }

        return $this;
    }

    public function removeAnime(Animes $anime): self
    {
        if ($this->animes->removeElement($anime)) {
            // set the owning side to null (unless already changed)
            if ($anime->getWorks() === $this) {
                $anime->setWorks(null);
            }
        }

        return $this;
    }
}
