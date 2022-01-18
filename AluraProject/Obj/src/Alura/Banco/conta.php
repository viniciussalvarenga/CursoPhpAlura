<?php

namespace src\Alura\Banco;

use src\Alura\Pessoa\pessoa;
use src\Alura\Service\ThrowException;

abstract class conta extends pessoa
{

    protected int $saldo;
    private static int $numerodecontas = 0;


    public function __construct($cpf, $nome)
    {
        parent::__construct($cpf, $nome);
        $this->saldo = 0;
        self::$numerodecontas++;
    }

    public function __destruct()
    {
        self::$numerodecontas--;
    }

    public function sacar(float $quantidade)
    {
        if ($quantidade > $this->saldo) {
            throw new ThrowException($quantidade, $this->saldo);
        }

        $this->saldo -= $quantidade;

        return $this->saldo;

    }

    public function depositar(float $quantidadedeposito): float
    {
        if ($quantidadedeposito < 0) {
            echo 'Não é possível depositar valores negativos' . "\n";
        }

        $this->saldo += $quantidadedeposito;

        return $this->saldo;
    }




    public function exibirSaldo()
    {
        if (($this->saldo) > 0) {
            return $this->saldo . "\n";
        }
        return null;
    }

    public static function recuperaNumerodecontas(): int

    {
        return self::$numerodecontas;
    }

    abstract function tarifa();
}
