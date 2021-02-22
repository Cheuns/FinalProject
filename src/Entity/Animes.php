<?php

namespace App\Entity;

use App\Repository\AnimesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AnimesRepository::class)
 */
class Animes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Works::class, inversedBy="animes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $works;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Episodes;

    /**
     * @ORM\Column(type="text")
     */
    private $Abstract;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Studio;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $specialedition;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $oav;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $broadcast;

    /**
     * @ORM\OneToMany(targetEntity=Seasons::class, mappedBy="animes")
     */
    private $seasons;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pictures;

    public function __construct()
    {
        $this->seasons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWorks(): ?works
    {
        return $this->works;
    }

    public function setWorks(?works $works): self
    {
        $this->works = $works;

        return $this;
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

    public function getEpisodes(): ?string
    {
        return $this->Episodes;
    }

    public function setEpisodes(string $Episodes): self
    {
        $this->Episodes = $Episodes;

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

    public function getStudio(): ?string
    {
        return $this->Studio;
    }

    public function setStudio(string $Studio): self
    {
        $this->Studio = $Studio;

        return $this;
    }

    public function getSpecialedition(): ?string
    {
        return $this->specialedition;
    }

    public function setSpecialedition(?string $specialedition): self
    {
        $this->specialedition = $specialedition;

        return $this;
    }

    public function getOav(): ?string
    {
        return $this->oav;
    }

    public function setOav(?string $oav): self
    {
        $this->oav = $oav;

        return $this;
    }

    public function getBroadcast(): ?string
    {
        return $this->broadcast;
    }

    public function setBroadcast(string $broadcast): self
    {
        $this->broadcast = $broadcast;

        return $this;
    }

    /**
     * @return Collection|Seasons[]
     */
    public function getSeasons(): Collection
    {
        return $this->seasons;
    }

    public function addSeason(Seasons $season): self
    {
        if (!$this->seasons->contains($season)) {
            $this->seasons[] = $season;
            $season->setAnimes($this);
        }

        return $this;
    }

    public function removeSeason(Seasons $season): self
    {
        if ($this->seasons->removeElement($season)) {
            // set the owning side to null (unless already changed)
            if ($season->getAnimes() === $this) {
                $season->setAnimes(null);
            }
        }

        return $this;
    }

    public function getPictures(): ?string
    {
        return $this->pictures;
    }

    public function setPictures(string $pictures): self
    {
        $this->pictures = $pictures;

        return $this;
    }
}
