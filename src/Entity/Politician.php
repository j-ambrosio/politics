<?php

namespace App\Entity;

use App\Repository\PoliticianRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PoliticianRepository::class)
 */
class Politician
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToOne(targetEntity="Person")
     */
    protected $personal;

    public function getPersonal()
    {
        return $this->personal;
    }

    protected function setPersonal(Person $personal): self
    {
        $this->personal = $personal;
        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
