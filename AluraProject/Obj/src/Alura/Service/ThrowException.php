<?php

namespace src\Alura\Service;

class ThrowException extends \DomainException
{
    public function __construct($valorsaque, $saldo)
    {
        $message = "Você tentou sacar R\${$valorsaque}, porém você tem R\${$saldo} na conta.";
        parent::__construct($message);
    }
}