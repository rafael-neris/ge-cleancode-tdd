<?php

namespace Unit;

use Jokenpo\Papel;
use Jokenpo\Pedra;
use Jokenpo\Tesoura;
use PHPUnit\Framework\TestCase;

class PedraTest extends TestCase
{
    public function testGainFrom()
    {
        $pedra = new Pedra();
        $resultado = $pedra->gainFrom();

        self::assertEquals([Tesoura::class], $resultado);
    }
}