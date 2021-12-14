<?php

$_idade = 19;
$nome_ = 'Vinícius';
echo "Olá, Mundo!" , PHP_EOL;
echo "Eu tenho \"$_idade\" anos.\n";

if ($_idade >= 18 && $nome_ == 'Vinícius') {
    echo "\nVocê tem mais de 18 anos. Bem vindo, $nome_!";
} else {
    echo "\nAcesso negado.";
}

echo "\n\nAdeus.";