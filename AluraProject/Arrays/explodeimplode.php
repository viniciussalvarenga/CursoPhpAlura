<?php

$nomes = "Vinícius, Lua, Gleydson, Jefferson";

$array_nomes = explode(", ", $nomes);

foreach($array_nomes as $nome){
    echo $nome . '<br>';
}

$NomesJuntos = implode(", ", $array_nomes);

echo $NomesJuntos;