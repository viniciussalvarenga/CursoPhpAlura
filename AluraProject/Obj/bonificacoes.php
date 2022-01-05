<?php

use src\Alura\Funcionarios\{Desenvolvedor, Diretor, Gerente};
use src\Alura\Pessoa\{endereco, exibircpf, funcionario};
use src\Alura\Service\autenticador;
use src\Alura\Service\controladorbonificacoes;


require_once 'autoload.php';

$umfuncionario = new Desenvolvedor(
    'Vinícius Alvarenga',
    new exibircpf('132.456.789-10'),
    1000);

$umafuncionaria = new Gerente(
    'Lua Garrido',
    new exibircpf('.789.456.123-11'),
    3000);

$outrofuncionario = new Diretor('Wesley',
    new exibircpf('456.789.123-12'),
    5000);

$controlador = new controladorbonificacoes();

$autenticador = new autenticador();

$autenticador->login($umfuncionario, 8888);

$controlador->adicionaBonificacaoDe($umfuncionario);
$controlador->adicionaBonificacaoDe($umafuncionaria);
$controlador->adicionaBonificacaoDe($outrofuncionario);


echo $controlador->recuperaTotalbonificacoes();