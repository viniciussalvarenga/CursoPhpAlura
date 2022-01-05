<?php

namespace src\Alura\Service;

use src\Alura\Pessoa\funcionario;

class controladorbonificacoes
{
    private $totalbonificacoes = 0;

    public function adicionaBonificacaoDe(funcionario $funcionario)
    {
        $this->totalbonificacoes += $funcionario->calculabonificacao();
    }

    public function recuperaTotalbonificacoes()
    {
        return $this->totalbonificacoes;
    }
}