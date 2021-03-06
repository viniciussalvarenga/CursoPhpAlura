<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;
use Doctrine\ORM\EntityManager;

class Alteracao extends ControllerHtml implements InterfaceControladorRequisicao
{
    private $repositorioCursos;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioCursos = $entityManager->getRepository(Curso::class);
    }

    public function processarRequisicao(): void
    {
        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

        if (is_null($id) || $id === false){
            header('Location: /listar-cursos', 'true', 302);
        }

        $curso = $this->repositorioCursos->find($id);

        echo $this->renderizarHtml('formulario-curso.php', [
            'cursos' => $curso,
            'titulo' => 'Alterar curso ' . $curso->getDescricao()
        ]);

    }
}