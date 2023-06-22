<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use App\Repository\ProfessionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ProfessionRepository::class)]
#[ORM\HasLifecycleCallbacks]

class Profession
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['craftsman:list', 'craftsman:item'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['craftsman:list', 'craftsman:item'])]
    private ?string $name = null;

    #[ORM\Column(length: 20)]
    private ?string $status = null;

    #[ORM\Column]
    #[Groups(['craftsman:item', 'craftsman:list'])]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Groups(['craftsman:item', 'craftsman:list'])]
    private ?string $description = null;

    #[ORM\ManyToMany(targetEntity: Craftsman::class, mappedBy: 'professions')]
    private Collection $craftsmen;

    public function __construct()
    {
        $this->craftsmen = new ArrayCollection();
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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    #[ORM\PrePersist]
    public function setCreatedAtValue()
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    #[ORM\PreUpdate]
    public function setUpdatedAtValue()
    {
        $this->updatedAt = new \DateTimeImmutable();
    }

    /**
     * @return Collection<int, Craftsman>
     */
    public function getCraftsmen(): Collection
    {
        return $this->craftsmen;
    }

    public function addCraftsman(Craftsman $craftsman): self
    {
        if (!$this->craftsmen->contains($craftsman)) {
            $this->craftsmen->add($craftsman);
            $craftsman->addProfession($this);
        }

        return $this;
    }

    public function removeCraftsman(Craftsman $craftsman): self
    {
        if ($this->craftsmen->removeElement($craftsman)) {
            $craftsman->removeProfession($this);
        }

        return $this;
    }
}
