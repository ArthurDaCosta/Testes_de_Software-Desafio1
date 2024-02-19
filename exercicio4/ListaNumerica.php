<?php

use Hamcrest\Type\IsInteger;

class ListaNumerica
{
    function somarElementos(array $lista)
    {
        foreach ($lista as $elemento) {
            if (!is_numeric($elemento)) {
                return "Valores Inválidos";
            }
        }

        return array_sum($lista);
    }

    function encontrarMaiorElemento(array $lista)
    { 
        if(empty($lista))
        {
            return $maior = "Lista Vazia";
        }

        foreach ($lista as $elemento) {
            if (!is_numeric($elemento)) {
                return "Valores Inválidos";
            }
        }

        $maior = max($lista);
        return $maior;
    }

    function encontrarMenorElemento(array $lista)
    {
        if(empty($lista))
        {
            return $menor = "Lista Vazia";
        }

        foreach ($lista as $elemento) {
            if (!is_numeric($elemento)) {
                return "Valores Inválidos";
            }
        }

        $menor = min($lista);

        return $menor;
    }

    function ordenarLista(array $lista)
    {
        foreach ($lista as $elemento) {
            if (!is_numeric($elemento)) {
                return "Valores Inválidos";
            }
        }

        sort($lista);

        return $lista;
    }

    function filtarNumerosPares(array $lista)
    {
        foreach ($lista as $elemento) {
            if (!is_numeric($elemento)) {
                return "Valores Inválidos";
            }
        }

        $pares = [];
        foreach ($lista as $elemento) {
            if ($elemento % 2 === 0 && (int)$elemento == $elemento) {
                $pares[] = $elemento;
            } 
        }

        return $pares;  
    }
}