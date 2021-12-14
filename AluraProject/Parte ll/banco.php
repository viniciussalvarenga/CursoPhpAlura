<?php

require_once 'functions.php';

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


depositacpf(800, '518.249.428-93');
saquecpf(500, '258.545.879-56');

unset($accounts['342.312.345-91']);


?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alura PHP</title>
</head>
<body>
    <h1>Contas-correntes</h1>
    <dl>
        <?php foreach ($accounts as $cpf => $account) { ?>
        <dt><h3><?php echo $cpf;?> - <?php echo $account['titular'] ?> </h3></dt>
        <dd>Saldo: <?php echo $account['saldo'] ?></dd>
        <?php } ?>
    </dl>
</body>
</html>


