<?php

require_once 'autoload.php';

$nomes = [
    'Lua',
    'Vinícius',
    'Jorge'
];

$saldos = [
    1050,
    1050,
    2000
];


$array = array_combine($nomes, $saldos);

$array['Gleydson'] = 4500;

$maiores = \Alura\ArrayUtils::saldomaior(1000, $array);

for ($i = 0; $i < count($maiores); $i++){
    echo $maiores[$i] . '<br>';
}

