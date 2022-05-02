<?php

namespace Unit;

use Jokenpo\Jokenpo;
use Jokenpo\Papel;
use Jokenpo\Pedra;
use Jokenpo\Play;
use Jokenpo\Player;
use Jokenpo\Tesoura;
use PHPUnit\Framework\TestCase;

class JokenpoTest extends TestCase
{

    private Player $player1;
    private Player $player2;
    private Jokenpo $jokenPo;

    protected function setUp(): void
    {
        $this->player1 = new Player("Hemilio");
        $this->player2 = new Player("Joao");
        $this->jokenPo = new Jokenpo($this->player1, $this->player2);
        parent::setUp();
    }

    /**
     * @dataProvider playProvider
     */
    public function testTie(Play $play)
    {
        $this->player1->choosePlay($play);
        $this->player2->choosePlay($play);

        $resultado = $this->jokenPo->start();

        self::assertEquals("Empate", $resultado);
    }

    public function playProvider()
    {
        return [
            [new Papel()],
            [new Tesoura()],
            [new Pedra()],
        ];
    }

    /**
     * @dataProvider winsProvider
     */
    public function testWins(Play $jogadaVencedora, Play $jogadaPerdedora)
    {
        $this->player1->choosePlay($jogadaVencedora);
        $this->player2->choosePlay($jogadaPerdedora);


        $resultado = $this->jokenPo->start();

        self::assertEquals("Hemilio ganhou a partida.", $resultado);
    }

    /**
     * @dataProvider winsProvider
     */
    public function testLose(Play $jogadaPerdedora, Play $jogadaVencedora)
    {
        $this->player1->choosePlay($jogadaVencedora);
        $this->player2->choosePlay($jogadaPerdedora);

        $resultado = $this->jokenPo->start();

        self::assertEquals("Joao ganhou a partida.", $resultado);
    }

    public function winsProvider()
    {
        return [
            [new Pedra(), new Tesoura()],
            [new Papel(), new Pedra()],
            [new Tesoura(), new Papel()],
        ];
    }
}