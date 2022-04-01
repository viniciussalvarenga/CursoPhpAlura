<?php

namespace Alura\Cursos\Controller;

class LoginView extends ControllerHtml implements InterfaceControladorRequisicao
{
    public function processarRequisicao(): void
    {
        echo $this->renderizarHtml('login/formulario.php', [
            'titulo' => 'Login'
        ]);
    }
}

