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
$umaconta -> transferir(200, $outraconta);
echo $umaconta -> exibirSaldo();

echo $endereco->bairro;

echo "\n" . \src\Alura\Banco\conta::recuperaNumerodecontas();