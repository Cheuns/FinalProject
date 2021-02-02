<?php

namespace App\Entity;

use App\Repository\MangasRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MangasRepository::class)
 */
class Mangas
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=works::class, inversedBy="mangas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $works;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $books;

    /**
     * @ORM\Column(type="text")
     */
    private $abstract;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $editor;

    /**
     * @ORM\Column(type="date")
     */
    private $releasedate;

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

    public function getBooks(): ?string
    {
        return $this->books;
    }

    public function setBooks(string $books): self
    {
        $this->books = $books;

        return $this;
    }

    public function getAbstract(): ?string
    {
        return $this->abstract;
    }

    public function setAbstract(string $abstract): self
    {
        $this->abstract = $abstract;

        return $this;
    }

    public function getEditor(): ?string
    {
        return $this->editor;
    }

    public function setEditor(string $editor): self
    {
        $this->editor = $editor;

        return $this;
    }

    public function getReleasedate(): ?\DateTimeInterface
    {
        return $this->releasedate;
    }

    public function setReleasedate(\DateTimeInterface $releasedate): self
    {
        $this->releasedate = $releasedate;

        return $this;
    }
}
