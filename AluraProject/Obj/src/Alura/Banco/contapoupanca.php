<?php

namespace src\Alura\Banco;

class contapoupanca extends conta
{
    public function tarifa(){
        return 0.03;
    }
    public function transferir(float $quantidadetransf, Conta $contadestino)
    {
        echo "Apenas contas correntes podem realizar transferĂȘncias.\n";
    }
}