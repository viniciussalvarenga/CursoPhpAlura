<?php

namespace Alura\Leilao\Tests\Service;

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Service\Avaliador;
use PHPUnit\Framework\TestCase;

class AvaliadorTest extends TestCase
{
    private $avaliador;

    protected function setUp():void{
        $this->avaliador = new Avaliador();
    }

    /**
     * @dataProvider leilaoEmOrdemDecrescente
     * @dataProvider leilaoEmOrdemCrescente
     * @dataProvider leilaoEmOrdemAleatoria
     */

    public function testAvaliadorDeveEncontrarOMaiorValorDeLances(Leilao $leilao)
    {
        // Act
        $this->avaliador->avalia($leilao);

        $maiorValor = $this->avaliador->getMaiorValor();

        // Assert
        self::assertEquals(2000, $maiorValor);
    }

    /**
     * @dataProvider leilaoEmOrdemDecrescente
     * @dataProvider leilaoEmOrdemCrescente
     * @dataProvider leilaoEmOrdemAleatoria
     */

    public function testAvaliadorDeveEncontrarOMenorValorDeLances(Leilao $leilao)
    {
        // Act
        $this->avaliador->avalia($leilao);

        $menorValor = $this->avaliador->getMenorValor();

        // Assert
        self::assertEquals(1500, $menorValor);
    }

    /**
     * @dataProvider leilaoEmOrdemDecrescente
     * @dataProvider leilaoEmOrdemCrescente
     * @dataProvider leilaoEmOrdemAleatoria
     */

    public function testAvaliadorDeveBuscar3MaioresValores(Leilao $leilao)
    {
        $this->avaliador->avalia($leilao);

        $maiores = $this->avaliador->getMaioresLances();
        static::assertCount(3, $maiores);
        static::assertEquals(2000, $maiores[0]->getValor());
        static::assertEquals(1700, $maiores[1]->getValor());
        static::assertEquals(1500, $maiores[2]->getValor());

    }

    public function leilaoEmOrdemCrescente(){

        $leilao = new Leilao('Arroz');

        $maria = new Usuario('Maria');
        $ana = new Usuario('Ana');
        $jorge = new Usuario('Jorge');

        $leilao->recebeLance(new Lance($ana, 1500));
        $leilao->recebeLance(new Lance($jorge, 1700));
        $leilao->recebeLance(new Lance($maria, 2000));

        return [
            [$leilao]
        ];
    }

    public function leilaoEmOrdemDecrescente(){

        $leilao = new Leilao('Arroz');

        $maria = new Usuario('Maria');
        $ana = new Usuario('Ana');
        $jorge = new Usuario('Jorge');

        $leilao->recebeLance(new Lance($maria, 2000));
        $leilao->recebeLance(new Lance($jorge, 1700));
        $leilao->recebeLance(new Lance($ana, 1500));

        return [
            [$leilao]
        ];
    }

    public function leilaoEmOrdemAleatoria(){

        $leilao = new Leilao('Arroz');

        $maria = new Usuario('Maria');
        $ana = new Usuario('Ana');
        $jorge = new Usuario('Jorge');

        $leilao->recebeLance(new Lance($jorge, 1700));
        $leilao->recebeLance(new Lance($maria, 2000));
        $leilao->recebeLance(new Lance($ana, 1500));

        return [
            [$leilao]
        ];
    }


}
