<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class Persistencia implements InterfaceControladorRequisicao
{

    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())
            ->getEntityManager();
    }

    public function processarRequisicao() : void
    {
        $curso = new Curso();

        $descricao = filter_input(
            INPUT_POST,
        'descricao',
        FILTER_SANITIZE_STRING);

        if ($descricao === false){
            echo "Descrição inválida.";
            header('Location: /listar-cursos', true, 302);
        } else {
            $this->entityManager->persist($curso);
        }

        $curso->setDescricao($_POST['descricao']);

        $this->entityManager->flush();

        header('Location: /listar-cursos', true, 302);

    }
}