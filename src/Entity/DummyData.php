<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DummyDataRepository")
 */
class DummyData
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dummyField;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dummyField2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDummyField(): ?string
    {
        return $this->dummyField;
    }

    public function setDummyField(?string $dummyField): self
    {
        $this->dummyField = $dummyField;

        return $this;
    }

    public function getDummyField2(): ?string
    {
        return $this->dummyField2;
    }

    public function setDummyField2(string $dummyField2): self
    {
        $this->dummyField2 = $dummyField2;

        return $this;
    }
}
