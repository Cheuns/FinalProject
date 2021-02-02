<?php

namespace App\Entity;

use App\Repository\SeasonsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SeasonsRepository::class)
 */
class Seasons
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=animes::class, inversedBy="seasons")
     * @ORM\JoinColumn(nullable=false)
     */
    private $animes;

    /**
     * @ORM\Column(type="integer")
     */
    private $Season;

    /**
     * @ORM\Column(type="date")
     */
    private $seasondate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnimes(): ?animes
    {
        return $this->animes;
    }

    public function setAnimes(?animes $animes): self
    {
        $this->animes = $animes;

        return $this;
    }

    public function getSeason(): ?int
    {
        return $this->Season;
    }

    public function setSeason(int $Season): self
    {
        $this->Season = $Season;

        return $this;
    }

    public function getSeasondate(): ?\DateTimeInterface
    {
        return $this->seasondate;
    }

    public function setSeasondate(\DateTimeInterface $seasondate): self
    {
        $this->seasondate = $seasondate;

        return $this;
    }
}
