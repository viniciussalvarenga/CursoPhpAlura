<?php declare(strict_types=1);

namespace Alura;

class ArrayUtils
{
    public static function remover($elemento, array &$array)
    {
        $search = array_search($elemento, $array, true);
        if (is_int($search)) {
            unset($array[$search]);
        } else {
            echo "Este objeto não existe<br>";
        }
    }

    public static function saldomaior(int $saldo, array $array): array
    {
        $pessoascomsaldomaior = array();
        foreach ($array as $pessoa => $valor) {
            if ($valor > $saldo) {
                $pessoascomsaldomaior[] = $pessoa;
            }
        }
        return $pessoascomsaldomaior;
    }
}