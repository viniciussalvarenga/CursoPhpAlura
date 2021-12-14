<?php

$accounts = [
    '518.249.428-93' => [
        'titular' => 'Vinícius',
        'saldo' => 1050
    ],
    '342.312.345-91' => [
        'titular' => 'Luiz',
        'saldo' => 10000
    ],
    '432.249.425-68' => [
        'titular' => 'Gleydson',
        'saldo' => 2500
    ]
];

$accounts['258.545.879-56'] = [
    'titular' => 'Lua',
    'saldo' => 1050
];

foreach ($accounts as $cpf => $account) {
    echo $cpf . " " . $account['titular'] . PHP_EOL;

}



