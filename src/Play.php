<?php

namespace Jokenpo;

abstract class Play
{
    protected array $gainFrom;

    public function gainFrom(): array
    {
        return $this->gainFrom;
    }
}