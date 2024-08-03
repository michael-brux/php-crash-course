<?php
class Player
{
    private string $name;
    private int $highScore = 0;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setHighScore(int $newScore)
    {
        if ($newScore > $this->highScore) {
            $this->highScore = $newScore;
        }
    }
}
