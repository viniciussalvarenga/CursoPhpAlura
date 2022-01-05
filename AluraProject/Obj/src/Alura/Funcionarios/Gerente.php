<?php

namespace src\Alura\Funcionarios;

use src\Alura\Pessoa\funcionario;
use src\Alura\Service\autenticavel;

class Gerente extends funcionario implements autenticavel
{
    public function calculabonificacao()
    {
        return $this->recuperaSalario();
    }

    public function password()
    {
        return '8888';
    }
}