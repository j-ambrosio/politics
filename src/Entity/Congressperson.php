<?php

namespace App\Entity;

use App\Repository\CongresspersonRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CongresspersonRepository::class)
 */
class Congressperson
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $externalId;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $externalUri;

    /**
     * @ORM\OneToOne(targetEntity="Politician")
     */
    protected $politician;

    public function getPolitician()
    {
        return $this->politician;
    }

    public function setPolitician(Politician $politician): self
    {
        $this->politician = $politician;
        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExternalId(): ?int
    {
        return $this->externalId;
    }

    public function setExternalId(int $externalId): self
    {
        $this->externalId = $externalId;

        return $this;
    }

    public function getExternalUri(): ?string
    {
        return $this->externalUri;
    }

    public function setExternalUri(?string $externalUri): self
    {
        $this->externalUri = $externalUri;

        return $this;
    }
}
