<?php

require_once 'vendor/autoload.php';

use GuzzleHttp\Client;
use alura\cursos\buscadordecursos;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client([
    'base_uri' => 'https://www.alura.com.br/cursos-online-programacao/',
    'verify' => false
]);

$crawler = new Crawler();

$buscador = new buscadordecursos($client, $crawler);
$cursos = $buscador->buscar('excel');

if ($cursos === []) {
    echo "Este curso não existe!";
    exit;
}
foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
}



