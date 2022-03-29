<?php

namespace Alura\Cursos\Controller;

class ControllerHtml
{
    public function renderizarHtml(string $caminho, array $dados)
    {
        extract($dados);
        ob_start();
        require __DIR__ . '/../../view' . $caminho;
        $html = ob_get_clean();

        return $html;
}
}