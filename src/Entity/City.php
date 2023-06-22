<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\CityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: CityRepository::class)]
#[ORM\HasLifecycleCallbacks]
class City
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['craftsman:item', 'craftsman:list'])]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Groups(['craftsman:item', 'craftsman:list'])]
    private ?string $arName = null;

    #[ORM\Column(length: 50)]
    #[Groups(['craftsman:item', 'craftsman:list'])]
    private ?string $frName = null;

    #[ORM\Column(length: 50)]
    private ?string $status = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\ManyToMany(targetEntity: Craftsman::class, mappedBy: 'cities')]
    private Collection $craftsmen;

    public function __construct()
    {
        $this->craftsmen = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArName(): ?string
    {
        return $this->arName;
    }

    public function setArName(string $arName): self
    {
        $this->arName = $arName;

        return $this;
    }

    public function getFrName(): ?string
    {
        return $this->frName;
    }

    public function setFrName(string $frName): self
    {
        $this->frName = $frName;

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
            $craftsman->addCity($this);
        }

        return $this;
    }

    public function removeCraftsman(Craftsman $craftsman): self
    {
        if ($this->craftsmen->removeElement($craftsman)) {
            $craftsman->removeCity($this);
        }

        return $this;
    }
}
