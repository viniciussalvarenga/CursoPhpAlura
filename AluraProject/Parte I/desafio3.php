<?php

$altura = 1.73;
$peso = 62;
$imc = $peso / ($altura ** 2);

if ($imc < 18.5){
    echo"Seu IMC é $imc \nVocê está abaixo do peso.";
} elseif ((24.9 > $imc) && ($imc > 18.5 )){
    echo"Seu IMC é $imc \nVocê está com o peso normal.";
} elseif ((34.9 > $imc) && ($imc > 24.9)){
    echo"Seu IMC é $imc \nVocê está com obesidade Grau I.";
} elseif ((39.9 > $imc) && ($imc > 35)){
    echo"Seu IMC é $imc \nVocê está com obesidade Grau II.";
} else {
    echo"Seu IMC é $imc \nVocê está com obesidade Grau III ou Mórbida.";
}