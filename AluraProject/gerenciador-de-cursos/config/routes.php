<?php

use Alura\Cursos\Controller\{Alteracao,
    Exclusao,
    FormularioInsercao,
    FormularioLogin,
    ListarCursos,
    LoginView,
    Logout,
    Persistencia};


return [
    '/formulario-novo-curso' =>   FormularioInsercao::class,
    '/listar-cursos' =>ListarCursos::class,
    '/salvar-curso' => Persistencia::class,
    '/excluir-curso' => Exclusao::class,
    '' => ListarCursos::class,
    '/alterar-curso' => Alteracao::class,
    '/login' => LoginView::class,
    '/realiza-login' => FormularioLogin::class,
    '/logout' => Logout::class
];
