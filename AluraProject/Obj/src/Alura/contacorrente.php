<?php

namespace src\Alura;

class contacorrente extends conta
{
    public function tarifa(){
        return 0.05;
    }

    public function transferir(float $quantidadetransf, Conta $contadestino)
    {
        if ($quantidadetransf > $this->saldo) {
            echo 'Você não possui saldo o suficiente' . "\n";
            return;
        }

        $contadestino->saldo += $quantidadetransf - $quantidadetransf * $this->tarifa();
        $this->saldo -= $quantidadetransf +  $quantidadetransf * $this->tarifa();
    }
}