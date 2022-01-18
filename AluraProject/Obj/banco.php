<?php

use src\Alura\Banco\{contacorrente, contapoupanca};
use src\Alura\Pessoa\{endereco, exibircpf};

require_once 'autoload.php';

$endereco = new endereco('Av. Salgado Filho',
    'Guarulhos',
    'Centro',
    '3119');

$umaconta = new contapoupanca(
    new exibircpf('123.456.789-10'),
    'Vinícius');

$outraconta = new contacorrente(
    new exibircpf('789.456.123-11'),
    'Lua');

$umaconta -> depositar(1000);

try {
    $umaconta -> sacar(1005);
} catch (\src\Alura\Service\ThrowException $erro){
    echo $erro->getMessage() . PHP_EOL;
}

echo $umaconta -> exibirSaldo();

echo $endereco->rua;

echo "\n" . \src\Alura\Banco\conta::recuperaNumerodecontas();