<?php
namespace App\Entity;

use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\UserRepository;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\SerializedName;


/**
 * @ORM\ManyToOne(...)
 * @ORM\JoinColumn(...)
 */
/**
 * @ApiResource(
 * collectionOperations={
 *     "get"={"normalization_context"={"groups"={"quizz"}}},
 *  "post",},
 * itemOperations={
 *     "get"={"normalization_context"={"groups"={"quizz"}}},
 *     "put",
 *     "delete"
 *                }, paginationEnabled=false
 * )
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields="email", message="Email is already used.")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"quizz"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=60, unique=true)
     * @Groups({"quizz", "userInfos"})
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups({"quizz", "userInfos"})
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups({"quizz", "userInfos"})
     */
    private $lastname;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $image;

    /**
     * @var string The hashed password
     * @ORM\Column(type="string", length=3000, nullable= false)
     *
     */
    private $password;




    /**
     * @ORM\ManyToOne(targetEntity=Role::class)
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"quizz", "userInfos"})
     */
    private $role;




    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
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

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

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

    public function getUsername(): ?string
    {
        return $this->email;
    }


    public function setUsername(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getRole(): Role
    {
        return $this->role;
    }


    public function setRole(?Role $role): self
    {
        $this->role = $role;

        return $this;
    }


    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {

         $roles[0] = $this-> role;
        return $roles;
    }



    /**
     * @Groups("user:write")
     *
     * @SerializedName("password")
     */
    private $plainPassword;

    /**
     * @return mixed
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * @param mixed $plainPassword
     */
    public function setPlainPassword($plainPassword): void
    {
        $this->plainPassword = $plainPassword;
    }


    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        $this->plainPassword = null;
    }

    public function getSalt(): void
    {

    }

}
