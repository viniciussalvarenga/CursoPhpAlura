<?php

class endereco
{
    private $rua;
    private $cidade;
    private $bairro;
    private $numero;

    public function __construct($rua, $cidade, $bairro, $numero)
    {
        $this->rua = $rua;
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->numero = $numero;
    }


    public function exibirRua()
    {
        return $this->rua . "\n";
    }


    public function exibirCidade()
    {
        return $this->cidade . "\n";
    }


    public function exibirBairro()
    {
        return $this->bairro . "\n";
    }

    public function exibirNumero()
    {
        return $this->numero . "\n";
    }


}