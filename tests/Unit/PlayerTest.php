<?php

namespace Unit;

use Jokenpo\Papel;
use Jokenpo\Pedra;
use Jokenpo\Play;
use Jokenpo\Player;
use Jokenpo\Tesoura;
use PHPUnit\Framework\TestCase;

class PlayerTest extends TestCase
{
    private Player $player;

    protected function setUp(): void
    {
        parent::setUp();
        $this->player = new Player("Joao");
    }

    /**
     * @dataProvider playProvider
     */
    public function testChoose(Play $play) {
        $player = $this->player->choosePlay($play);

        self::assertEquals($play, $player->play());
    }

    public function testGetName() {
        $nome = $this->player->getName();

        self::assertEquals("Joao", $nome);
    }

    public function playProvider()
    {
        return [
            [new Papel()],
            [new Tesoura()],
            [new Pedra()],
        ];
    }
}