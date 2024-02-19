<?php

use PHPUnit\Framework\TestCase;
require_once 'MinhaClasseAvancado.php';

class MinhaClasseAvancadoTest extends TestCase
{
    public function testSomar()
    {
        $minhaClasse = new MinhaClasseAvancado();
        $this->assertEquals(5       , $minhaClasse->somar(1, 4));       //Soma de inteiros positivos
        $this->assertEquals(-4      , $minhaClasse->somar(-1, -3));     //Soma de inteiros negativos
        $this->assertEquals(1       , $minhaClasse->somar(-1, 2));      //Soma de inteiros positivos e negativos
        $this->assertEquals(0       , $minhaClasse->somar(0, 0));       //Soma de zeros
        $this->assertEquals(6       , $minhaClasse->somar(6, 0));       //Soma de zero com inteiro positivo
        $this->assertEquals(-6      , $minhaClasse->somar(0, -6));      //Soma de inteiro negativo com zero
        $this->assertEquals(5       , $minhaClasse->somar(1, "4"));     //Soma com string númerica
        $this->assertEquals(3.7     , $minhaClasse->somar(1.2, 2.5));   //Soma com float
        $this->assertEquals(3.7     , $minhaClasse->somar(1.2, '2.5')); //Soma com string númerica float
        $this->assertEquals(8       , $minhaClasse->somar('5', "3"));   //Soma de string númerica
    }

    public function testSomarArgumentosInválidos()
    {
        $minhaClasse = new MinhaClasseAvancado();
        $this->assertEquals('Um dos valores informados não é um número' , $minhaClasse->somar('a', 2));    //Soma de número com string
        $this->assertEquals('Um dos valores informados não é um número' , $minhaClasse->somar(2, null));   //Soma de número com null
        $this->assertEquals('Um dos valores informados não é um número' , $minhaClasse->somar(false, 2));  //Soma de número com bool
    }

    public function testSubtrair()  
    {
        $minhaClasse = new MinhaClasseAvancado();
        $this->assertEquals(-3      , $minhaClasse->subtrair(1, 4));       //Subtração de inteiros positivos
        $this->assertEquals(2       , $minhaClasse->subtrair(-1, -3));     //Subtração de inteiros negativos
        $this->assertEquals(-3      , $minhaClasse->subtrair(-1, 2));      //Subtração de inteiros positivos e negativos
        $this->assertEquals(0       , $minhaClasse->subtrair(0, 0));       //Subtração de zeros
        $this->assertEquals(6       , $minhaClasse->subtrair(6, 0));       //Subtração de zero com inteiro positivo
        $this->assertEquals(6       , $minhaClasse->somar(0, -6));         //Subtração de inteiro negativo com zero
        $this->assertEquals(-3      , $minhaClasse->subtrair(1, "4"));     //Subtração com string númerica
        $this->assertEquals(-1.3    , $minhaClasse->subtrair(1.2, 2.5));   //Subtração com float
        $this->assertEquals(-1.3    , $minhaClasse->subtrair(1.2, '2.5')); //Subtração com string númerica float
        $this->assertEquals(2       , $minhaClasse->subtrair('5', "3"));   //Subtração de string númerica
    }

    public function testSubtrairArgumentosInválidos()
    {
        $minhaClasse = new MinhaClasseAvancado();
        $this->assertEquals('Um dos valores informados não é um número' , $minhaClasse->subtrair('a', 2));    //Subtração de número com string
        $this->assertEquals('Um dos valores informados não é um número' , $minhaClasse->subtrair(2, null));   //Subtração de número com null
        $this->assertEquals('Um dos valores informados não é um número' , $minhaClasse->subtrair(false, 2));  //Subtração de número com bool
    }
}