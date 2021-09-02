<?php
namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ScoreRepository;
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
 * @ORM\Entity(repositoryClass=ScoreRepository::class)
 */
class Score
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"quizz"})
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"quizz"})
     */
    private $score;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(int $score): self
    {
        $this->score = $score;

        return $this;
    }
}
