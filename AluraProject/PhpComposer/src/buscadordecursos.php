<?php

namespace alura\cursos;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class buscadordecursos
{
    private ClientInterface $client;
    private Crawler $crawler;

    public function __construct(ClientInterface $client, Crawler $crawler)
    {
        $this->client = $client;
        $this->crawler = $crawler;
    }

    public function buscar(string $linguagem)
    {
        $response = $this->client->request('GET', $linguagem);
        $html = $response->getBody();
        $this->crawler->addHtmlContent($html);
        $elemcursos = $this->crawler->filter('span.card-curso__nome');
        $cursos = [];
        foreach ($elemcursos as $elemento) {
            $cursos[] = $elemento->textContent;
        }
        return $cursos;
    }
}
