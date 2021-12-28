<?php

namespace src\Alura;

class pessoa
{
    private exibircpf $cpf;
    private string $nome;

    public function __construct(exibircpf $cpf, $nome)
    {
        $this->validaNome($nome);
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function getCpf()
    {
        return $this->cpf->retornarcpf() . "\n";
    }

    public function getNome()
    {
        return "$this->nome" . "\n";
    }

    protected function validaNome($nome)
    {
        if (strlen($nome) < 3) {
            echo 'Nome inválido';
            exit();
        }
        return $nome;
    }
}