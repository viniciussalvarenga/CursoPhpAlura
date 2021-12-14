<?php

$account1 =[
    'titular' => 'Vinícius',
    'saldo' => 1050
];
$account2 =[
    'titular' => 'Luiz',
    'saldo' => 10000
];
$account3 =[
    'titular' => 'Gleydson',
    'saldo' => 2500
];

$accounts = [$account1, $account2, $account3];

for ($i = 0; $i < count($accounts); $i++){
    echo $accounts[$i]['titular'] . PHP_EOL;
}

