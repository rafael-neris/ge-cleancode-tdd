<?php

namespace Unit;

use Jokenpo\Papel;
use Jokenpo\Pedra;
use PHPUnit\Framework\TestCase;

class PapelTest extends TestCase
{
    public function testGainFrom()
    {
        $papel = new Papel();
        $resultado = $papel->gainFrom();

        self::assertEquals([Pedra::class], $resultado);
    }
}
