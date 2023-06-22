<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Put;
use App\Repository\CraftsmanRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CraftsmanRepository::class)]

#[ORM\HasLifecycleCallbacks]
#[ApiResource(
    operations: [
        new Get(
            normalizationContext: ['groups' => 'craftsman:item']
        ),
        new GetCollection(
            normalizationContext: ['groups' => 'craftsman:list']
        ),
        new Post(
            denormalizationContext: ['groups' => 'craftsman:post'],
        ),
        new Put()
    ]
)]
class Craftsman
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['craftsman:item', 'craftsman:list'])]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'craftsman', targetEntity: CraftsmanImage::class)]
    #[Groups(['craftsman:item', 'craftsman:list'])]
    private Collection $craftsmanImages;

    #[ORM\OneToOne(inversedBy: 'craftsman', targetEntity: User::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotBlank]
    #[Groups(['craftsman:item', 'craftsman:list'])]
    private ?User $user = null;

    #[ORM\OneToMany(mappedBy: 'craftsman', targetEntity: Review::class)]
    private Collection $reviews;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Groups(['craftsman:item', 'craftsman:list'])]
    private ?string $description = null;

    #[ORM\Column(length: 50)]
    private ?string $status = null;

    #[ORM\ManyToMany(targetEntity: Profession::class, inversedBy: 'craftsmen')]
    #[Groups(['craftsman:item', 'craftsman:list'])]
    private Collection $professions;

    #[ORM\ManyToMany(targetEntity: City::class, inversedBy: 'craftsmen')]
    #[Groups(['craftsman:item', 'craftsman:list'])]
    private Collection $cities;


    public function __construct()
    {
        $this->craftsmanImages = new ArrayCollection();
        $this->professions = new ArrayCollection();
        $this->cities = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, CraftsmanImage>
     */
    public function getCraftsmanImages(): Collection
    {
        return $this->craftsmanImages;
    }

    public function addCraftsmanImage(CraftsmanImage $craftsmanImage): self
    {
        if (!$this->craftsmanImages->contains($craftsmanImage)) {
            $this->craftsmanImages->add($craftsmanImage);
            $craftsmanImage->setCraftsman($this);
        }

        return $this;
    }

    public function removeCraftsmanImage(CraftsmanImage $craftsmanImage): self
    {
        if ($this->craftsmanImages->removeElement($craftsmanImage)) {
            // set the owning side to null (unless already changed)
            if ($craftsmanImage->getCraftsman() === $this) {
                $craftsmanImage->setCraftsman(null);
            }
        }

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

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
            $review->setCraftsman($this);
        }

        return $this;
    }

    public function removeReview(Review $review): self
    {
        if ($this->reviews->removeElement($review)) {
            // set the owning side to null (unless already changed)
            if ($review->getCraftsman() === $this) {
                $review->setCraftsman(null);
            }
        }

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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return Collection<int, Profession>
     */
    public function getProfessions(): Collection
    {
        return $this->professions;
    }

    public function addProfession(Profession $profession): self
    {
        if (!$this->professions->contains($profession)) {
            $this->professions->add($profession);
        }

        return $this;
    }

    public function removeProfession(Profession $profession): self
    {
        $this->professions->removeElement($profession);

        return $this;
    }

    /**
     * @return Collection<int, City>
     */
    public function getCities(): Collection
    {
        return $this->cities;
    }

    public function addCity(City $city): self
    {
        if (!$this->cities->contains($city)) {
            $this->cities->add($city);
        }

        return $this;
    }

    public function removeCity(City $city): self
    {
        $this->cities->removeElement($city);

        return $this;
    }
}
