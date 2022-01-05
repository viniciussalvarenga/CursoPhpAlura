<?php

namespace src\Alura\Funcionarios;

use src\Alura\Pessoa\funcionario;
use src\Alura\Service\autenticavel;

class Diretor extends funcionario implements autenticavel
{
    public function calculabonificacao()
    {
        return $this->recuperaSalario() * 2;
    }

    public function password(){
        return "1234";
    }
}