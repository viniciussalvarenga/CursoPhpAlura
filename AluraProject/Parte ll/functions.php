<?php
function exibirmensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function saquecpf(float $reais, string $cpf)
{

    global $accounts;

    if ($accounts[$cpf]['saldo'] < $reais) {
        exibirmensagem("Você não pode sacar esse valor.");

    } else {
        $accounts[$cpf]['saldo'] -= $reais;
    }

}

function depositacpf(float $reais, string $cpf)
{
    global $accounts;

    if ($reais < 0) {
        exibirmensagem("Depositos não podem ser negativos.");
    } else {
        $accounts[$cpf]['saldo'] += $reais;
    }
}
