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
     * @ORM\ManyToOne(targetEntity=Animes::class, inversedBy="seasons")
     * @ORM\JoinColumn(nullable=false)
     */
    private $animes;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Season;

    /**
     * @ORM\Column(type="integer")
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

    public function getSeason(): ?string
    {
        return $this->Season;
    }

    public function setSeason(string $Season): self
    {
        $this->Season = $Season;

        return $this;
    }

    public function getSeasondate(): ?int
    {
        return $this->seasondate;
    }

    public function setSeasondate(int $seasondate): self
    {
        $this->seasondate = $seasondate;

        return $this;
    }
}
