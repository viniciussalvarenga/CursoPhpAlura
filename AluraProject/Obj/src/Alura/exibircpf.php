<?php

namespace src\Alura;

class exibircpf
{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $this->cpf = $cpf;
    }

    public function retornarcpf()
    {
        return "$this->cpf";
    }


}
