<?php

class usuario
{
    private $nome;
    private $sobrenome;

    public function __construct(string $nome)
    {
        $nomeSobrenome = explode(" ", $nome, 3);

        $this->nome = $nomeSobrenome[0];
        $this->sobrenome = $nomeSobrenome[1];

    }

    public function GetNome(): string
    {
        return $this->nome;
    }

    public function GetSobrenome(): string
    {
        return $this->sobrenome;
    }
}