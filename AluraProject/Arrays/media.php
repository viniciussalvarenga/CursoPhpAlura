<?php

$notas = [8,7,6,5];

require_once 'calculadora.php';

$calculadora = new Calculadora();
$calculadora -> calculaMedia($notas);
$media = $calculadora -> calculaMedia($notas);



if ($media){
    echo "Sua média é: $media";
} else {
    echo("Não há notas à serem computadas.");
}
