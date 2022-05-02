<?php

namespace Jokenpo;

class Jokenpo
{
    public function __construct(private Player $player1, private Player $player2)
    {
    }

    public function start()
    {
        $jogada1 = $this->player1->play();
        $jogada2 = $this->player2->play();

        if ($jogada1 === $jogada2) {
            return "Empate";
        }

        if (in_array($jogada2::class, $jogada1->gainFrom())) {
            return "{$this->player1->getName()} ganhou a partida.";
        }

        return "{$this->player2->getName()} ganhou a partida.";
    }
}