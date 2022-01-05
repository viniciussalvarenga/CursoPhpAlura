<?php

namespace src\Alura\Service;

use src\Alura\Pessoa\funcionario;

class autenticador
{
    public function login(funcionario $funcionario, string $senha)
    {
        if ($funcionario instanceof autenticavel && $senha === $funcionario->password()) {
            echo 'Senha Correta!' . "\n";
        } elseif ($funcionario instanceof autenticavel) {
            echo 'Senha incorreta.' . "\n";
        } else {
            echo 'Este usuário não pode autenticar.' . "\n";
        }


    }
}