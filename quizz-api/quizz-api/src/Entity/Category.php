<?php
namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CategoryRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 * collectionOperations={
 *     "get"={"normalization_context"={"groups"={"question", "quizz"}}},
 *  "post",},
 * itemOperations={
 *     "get"={"normalization_context"={"groups"={"question", "quizz"}}},
 *     "put",
 *     "delete"
 *                }
 * )
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 * @UniqueEntity(fields="name", message="Name is already used.")
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"question", "quizz", "category"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=55, unique=true)
     * @Groups({"question", "quizz", "category"})
     */                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
    private $name;

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
