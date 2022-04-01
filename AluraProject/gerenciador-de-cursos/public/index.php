<?php


use Alura\Cursos\Controller\InterfaceControladorRequisicao;


require_once __DIR__ . '/../vendor/autoload.php';

$rotas = require __DIR__ . '/../config/routes.php';
$caminho = $_SERVER['PATH_INFO'];

if (!array_key_exists($caminho, $rotas)){
    http_response_code(404);
    exit();
}

session_start();

if(!isset($_SESSION['logado']) || $caminho !== '/login' ){
    header('Location: /login');
    exit;
}

$classeControladora = $rotas[$caminho];
/**
 * @var InterfaceControladorRequisicao $controlador
 */
$controlador = new $classeControladora();
$controlador->processarRequisicao();


