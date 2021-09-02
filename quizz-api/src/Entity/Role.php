<?php
namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use App\Repository\RoleRepository;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 * collectionOperations={
 *     "get"={"normalization_context"={"groups"={"quizz"}}},
 *  "post",},
 * itemOperations={
 *     "get"={"normalization_context"={"groups"={"quizz"}}},
 *     "put",
 *     "delete"
 *                }
 * )
 * @ORM\Entity(repositoryClass=RoleRepository::class)
 * @UniqueEntity(fields="roleName", message="role is already used.")
 */
class Role
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"userInfos", "quizz"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=55, nullable=true)
     * @Groups({"userInfos", "quizz"})
     */
    private $roleName;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRoleName(): ?string
    {
        return $this->roleName;
    }

    public function setRoleName(?string $roleName): self
    {
        $this->roleName = $roleName;

        return $this;
    }


}
