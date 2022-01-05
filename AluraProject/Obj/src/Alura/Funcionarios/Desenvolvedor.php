<?php

namespace src\Alura\Funcionarios;

use src\Alura\Pessoa\funcionario;

class Desenvolvedor extends funcionario
{
    public function calculabonificacao()
    {
        return $this->recuperaSalario() * 0.2;
    }
}