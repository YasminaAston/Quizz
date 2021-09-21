<?php

namespace App\Dto;

class QuizzRespnseDto
{

    private $gameId;
    private $quizzId;
    private $isCorrect;



    /**
     * @return int
     */
    public function getGameId(): int
    {
        return $this->gameId;
    }

    /**
     * @param int $gameId
     */
    public function setGameId(int $gameId): void
    {
        $this->gameId = $gameId;
    }

    /**
     * @return int
     */
    public function getQuizzId(): int
    {
        return $this->quizzId;
    }

    /**
     * @param int $quizzId
     */
    public function setQuizzId(int $quizzId): void
    {
        $this->quizzId = $quizzId;
    }

    /**
     * @return bool
     */
    public function isCorrect(): bool
    {
        return $this->isCorrect;
    }

    /**
     * @param bool $isCorrect
     */
    public function setIsCorrect(bool $isCorrect): void
    {
        $this->isCorrect = $isCorrect;
    }


}
