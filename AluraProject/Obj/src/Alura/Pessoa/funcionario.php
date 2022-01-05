<?php

namespace src\Alura\Pessoa;

abstract class funcionario extends pessoa
{
    private $cargo;
    private $cpf;
    private $salario;

    public function __construct($nome, exibircpf $cpf, $salario)
    {
        parent::__construct($cpf, $nome);
        $this->salario = $salario;
        $this->cpf = $cpf;
    }

    public function recuperaSalario()
    {
        return $this->salario;
    }

    public function alterarNome($nome)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recuperaCpf()
    {
        return $this->cpf;
    }


    abstract function calculabonificacao();

}