<?php

namespace Alura;

class calculadora
{
    public function calculaMedia(array $notas): ?float
    {
        $tamarray = count($notas);

        $soma = 0;
        if ($tamarray > 0) {
            for ($i = 0; $i < count($notas); $i++) {
                $soma = $soma + $notas[$i];
            }

            $media = $soma / count($notas);

            return $media;
        } else {
            return null;
        }
    }
}
