<?php

namespace Unit;

use Jokenpo\Papel;
use Jokenpo\Pedra;
use Jokenpo\Tesoura;
use PHPUnit\Framework\TestCase;

class TesouraTest extends TestCase
{
    public function testGainFrom()
    {
        $pedra = new Tesoura();
        $resultado = $pedra->gainFrom();

        self::assertEquals([Papel::class], $resultado);
    }
}