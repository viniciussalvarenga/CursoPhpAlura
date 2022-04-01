<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class FormularioInsercao extends ControllerHtml implements InterfaceControladorRequisicao
{
    private $repositorioDeCursos;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioDeCursos = $entityManager->getRepository(Curso::class);
    }

    public function processarRequisicao() : void
    {
        $cursos = $this->repositorioDeCursos->findAll();
        echo $this->renderizarHtml('formulario-curso.php', [
            'cursos' => $cursos,
            'titulo' => 'Novo curso'
        ]);
    }
}