<?php

class funcionario extends pessoa
{
    private $cargo;
    private exibircpf $cpf;

    public function __construct($cargo, $nome, exibircpf $cpf)
    {
        parent::__construct($cpf, $nome);
        $this->cargo = $cargo;
    }

    public function alterarNome($nome)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recuperarCargo()
    {
        return $this->cargo;
    }



}