<?php

class MinhaClasseAvancado
{
    public function somar($a, $b)
    {
        try {
            if (!is_numeric($a) || !is_numeric($b)) {
                throw new Exception('Um dos valores informados não é um número');
            }

            $soma = $a + $b;

            return $soma;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function subtrair($a, $b)
    {
        try {
            if (!is_numeric($a) || !is_numeric($b)) {
                throw new Exception('Um dos valores informados não é um número');
            }

            $subtracao = $a - $b;

            return $subtracao;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}