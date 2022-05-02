<?php

namespace Jokenpo;

class Player
{
    private ?Play $play = null;

    public function __construct(
        private string $nome
    ) {
    }

    public function choosePlay(Play $play): Player
    {
        $this->play = $play;
        return $this;
    }

    public function play(): Play
    {
        return $this->play;
    }

    public function getName()
    {
        return $this->nome;
    }
}