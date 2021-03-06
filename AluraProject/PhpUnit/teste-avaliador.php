<?php

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Service\Avaliador;

require 'vendor/autoload.php';

// Arrange
$leilao = new Leilao('Fiat 147 0KM');

$maria = new Usuario('Maria');
$joao = new Usuario('João');

$leilao->recebeLance(new Lance($joao, 2000));
$leilao->recebeLance(new Lance($maria, 2500));

$leiloeiro = new Avaliador();

// Act
$leiloeiro->avalia($leilao);

$maiorValor = $leiloeiro->getMaiorValor();

// Assert
$valorEsperado = 2500;

if ($valorEsperado == $maiorValor) {
    echo "TESTE OK" , "\n";
} else {
    echo "TESTE FALHOU" . "\n";
}

foreach($leiloeiro->getMaioresLances() as $i => $value){
   echo $leiloeiro->getMaioresLances()[$i];
}

