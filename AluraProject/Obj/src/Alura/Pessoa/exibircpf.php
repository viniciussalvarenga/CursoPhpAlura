<?php

namespace src\Alura\Pessoa;

final class exibircpf
{
    private $cpf;

    public function __construct($cpf)
    {
        $this->cpf = $cpf;
    }

    public function retornarcpf()
    {
        return "$this->cpf";
    }


}
