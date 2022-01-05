<?php

namespace src\Alura\Pessoa;

class Titular extends pessoa
{

    private endereco $endereco;


    public function __construct($nome, exibircpf $cpf,endereco $endereco){
        parent::__construct($cpf, $nome);
        $this->endereco = $endereco;
    }


    public function recuperaEndereco(): endereco
    {
        return $this->endereco;
    }



}