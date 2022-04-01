<?php

namespace Alura\Cursos\Controller;

class Logout
{
    public function Deslogar()
    {
        session_destroy();
        header('Location: \login');
        exit;
        }
}