<?php

require_once 'autoload.php';

$endereco = new \src\Alura\endereco('Av. Salgado Filho', 'Guarulhos', 'Centro', '3119');
$umaconta = new \src\Alura\contapoupanca(new \src\Alura\exibircpf('123.456.789-10'), 'Vinícius');
$outraconta = new \src\Alura\contacorrente(new \src\Alura\exibircpf('456.123.789-11'), 'Lua');

$umaconta -> depositar(1000);
$umaconta -> transferir(200, $outraconta);
echo $umaconta -> exibirSaldo();

echo "\n" . \src\Alura\conta::recuperaNumerodecontas();