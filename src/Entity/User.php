<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
#[ORM\HasLifecycleCallbacks]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['craftsman:item', 'craftsman:list'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Email()]
    #[Groups(['craftsman:item', 'craftsman:list'])]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Groups(['craftsman:item', 'craftsman:list'])]
    private ?string $name = null;

    #[ORM\Column(length: 15)]
    #[Assert\NotBlank]
    #[Assert\Regex("/^0[0-9]{9}$/")]
    #[Groups(['craftsman:item', 'craftsman:list'])]
    private ?string $phone = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Groups(['craftsman:post'])]
    private ?string $password = null;

    #[ORM\Column]
    #[Groups(['craftsman:item', 'craftsman:list'])]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\OneToOne(mappedBy: 'user', cascade: ['persist', 'remove'])]
    private ?Craftsman $craftsman = null;

    #[Groups(['craftsman:item', 'craftsman:list'])]
    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Review::class)]
    private Collection $reviews;

    public function __construct()
    {
        $this->reviews = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
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

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

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

    public function getCraftsman(): ?Craftsman
    {
        return $this->craftsman;
    }

    public function setCraftsman(?Craftsman $craftsman): self
    {
        // unset the owning side of the relation if necessary
        if ($craftsman === null && $this->craftsman !== null) {
            $this->craftsman->setUser(null);
        }

        // set the owning side of the relation if necessary
        if ($craftsman !== null && $craftsman->getUser() !== $this) {
            $craftsman->setUser($this);
        }

        $this->craftsman = $craftsman;

        return $this;
    }

    /**
     * @return Collection<int, Review>
     */
    public function getReviews(): Collection
    {
        return $this->reviews;
    }

    public function addReview(Review $review): self
    {
        if (!$this->reviews->contains($review)) {
            $this->reviews->add($review);
            $review->setUser($this);
        }

        return $this;
    }

    public function removeReview(Review $review): self
    {
        if ($this->reviews->removeElement($review)) {
            // set the owning side to null (unless already changed)
            if ($review->getUser() === $this) {
                $review->setUser(null);
            }
        }

        return $this;
    }
}
