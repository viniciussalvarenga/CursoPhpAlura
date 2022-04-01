<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class ListarCursos extends ControllerHtml implements InterfaceControladorRequisicao
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
        echo $this->renderizarHtml('listar-cursos.php', [
            'cursos' => $cursos,
            'titulo' => 'Novo cursos'
        ]);
    }

}