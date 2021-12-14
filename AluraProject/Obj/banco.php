<?php

require_once 'src/Alura/pessoa.php';
require_once 'src/Alura/conta.php';
require_once 'src/Alura/Titular.php';
require_once 'src/Alura/cpf.php';
require_once 'src/Alura/endereco.php';
require_once 'src/Alura/funcionario.php';

$endereco = new endereco('Av. Salgado Filho', 'Guarulhos', 'Centro', '3119');
$umaconta = new conta(new exibircpf('518.249.428-93'), 'Vinícius');

echo $umaconta->getCpf();
echo $umaconta->getNome();
$umaconta->depositar(500);
echo $umaconta->exibirSaldo();

echo "\n" . Conta::recuperaNumerodecontas();
