<?php declare(strict_types=1);

namespace Alura;

require_once 'autoload.php';

$list = [
    'Lua',
    18,
    'Vinícius',
    '19',
    "18"
];

echo "<pre>";
var_dump($list);

ArrayUtils::remover('Vinícius', $list);

var_dump($list);

echo "</pre>";

foreach($list as $value) {
    echo "$value <br>";
}
    