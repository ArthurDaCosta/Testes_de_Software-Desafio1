<?php

use PHPUnit\Framework\TestCase;
require_once 'ListaNumerica.php';

class ListaNumericaTest extends TestCase
{
    public function testSomarElementos()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals(10      , $listaNumerica->somarElementos([1, 2, 3, 4]));        //Soma de inteiros positivos
        $this->assertEquals(-6      , $listaNumerica->somarElementos([-1, -2, -3]));        //Soma de inteiros negativos
        $this->assertEquals(0       , $listaNumerica->somarElementos([-1, 2, 3, -4]));      //Soma de inteiros positivos e negativos
        $this->assertEquals(0       , $listaNumerica->somarElementos([0, 0, 0, 0]));        //Soma de zeros
        $this->assertEquals(15      , $listaNumerica->somarElementos([1, 2, 3, "4", '5'])); //Soma com string númerica
        $this->assertEquals(7.4     , $listaNumerica->somarElementos([1.2, 2.5, 3.7]));     //Soma com float
        $this->assertEquals(7.4     , $listaNumerica->somarElementos([1.2, '2.5', 3.7]));   //Soma com string númerica float
        $this->assertEquals(1       , $listaNumerica->somarElementos([1]));                 //Soma de um elemento positivo
        $this->assertEquals(-2      , $listaNumerica->somarElementos([-2]));                //Soma de um elemento negativo
        $this->assertEquals(0       , $listaNumerica->somarElementos([0]));                 //Soma de um elemento zero
        $this->assertEquals(5       , $listaNumerica->somarElementos(['5']));               //Soma de uma string númerica
        $this->assertEquals(0       , $listaNumerica->somarElementos([]));                  //Soma de lista vazia
    }

    public function testSomarElementosComValoresInvalidos()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals("Valores Inválidos" , $listaNumerica->somarElementos(["a", "b", "c", "d"]));    //Soma de letras
        $this->assertEquals("Valores Inválidos" , $listaNumerica->somarElementos([1, 2, 3, "d"]));          //Soma de inteiros e letras
        $this->assertEquals("Valores Inválidos" , $listaNumerica->somarElementos([1, 2, 3, null]));         //Soma de inteiros e null
    }

    public function testEncontrarMaiorElemento()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals(4               , $listaNumerica->encontrarMaiorElemento([1, 2, 3, 4]));        //Maior elemento números positivos
        $this->assertEquals(-1              , $listaNumerica->encontrarMaiorElemento([-1, -3, -4]));        //Maior elemento números negativos
        $this->assertEquals(3               , $listaNumerica->encontrarMaiorElemento([-1, 2, 3, -4]));      //Maior elemento números positivos e negativos
        $this->assertEquals(0               , $listaNumerica->encontrarMaiorElemento([0, 0, 0, 0]));        //Maior elemento zeros
        $this->assertEquals(5               , $listaNumerica->encontrarMaiorElemento([1, 2, 3, "4", '5'])); //Maior elemento string númerica
        $this->assertEquals(3.7             , $listaNumerica->encontrarMaiorElemento([1.2, 2.5, 3.7]));     //Maior elemento float
        $this->assertEquals(3               , $listaNumerica->encontrarMaiorElemento([1.2, '2.5', 3]));     //maior elemento com string númerica float
        $this->assertEquals(1               , $listaNumerica->encontrarMaiorElemento([1]));                 //Maior elemento de um elemento positivo
        $this->assertEquals(-2              , $listaNumerica->encontrarMaiorElemento([-2]));                //Maior elemento de um elemento negativo
        $this->assertEquals(0               , $listaNumerica->encontrarMaiorElemento([0]));                 //Maior elemento de um elemento zero
        $this->assertEquals("Lista Vazia"   , $listaNumerica->encontrarMaiorElemento([]));                  //Maior elemento de lista vazia
    }

    public function testEncontrarMaiorElementoComValoresInvalidos()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals("Valores Inválidos" , $listaNumerica->encontrarMaiorElemento(["a", "b", "c", "d"]));    //Maior elemento de letras
        $this->assertEquals("Valores Inválidos" , $listaNumerica->encontrarMaiorElemento([1, 2, 3, "d"]));          //Maior elemento de inteiros e letras
        $this->assertEquals("Valores Inválidos" , $listaNumerica->encontrarMaiorElemento([1, 2, 3, null]));         //Maior elemento de inteiros e null
    }

    public function testEncontrarMenorElemento()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals(1               , $listaNumerica->encontrarMenorElemento([1, 2, 3, 4]));        //Menor elemento números positivos
        $this->assertEquals(-4              , $listaNumerica->encontrarMenorElemento([-1, -2, -3, -4]));    //Menor elemento números negativos
        $this->assertEquals(-4              , $listaNumerica->encontrarMenorElemento([-1, 2, 3, -4]));      //Menor elemento números positivos e negativos
        $this->assertEquals(0               , $listaNumerica->encontrarMenorElemento([0, 0, 0, 0]));        //Menor elemento zeros
        $this->assertEquals(1               , $listaNumerica->encontrarMenorElemento(['1', 2, 3, 4, 5]));   //Soma com string númerica
        $this->assertEquals(1.2             , $listaNumerica->encontrarMenorElemento([1.2, 2.5, 3.7]));     //Soma com float
        $this->assertEquals(1.2             , $listaNumerica->encontrarMenorElemento([1.2, '2.5', 3]));     //Soma com string númerica float
        $this->assertEquals(1               , $listaNumerica->encontrarMenorElemento([1]));                 //Menor elemento de um elemento positivo
        $this->assertEquals(-2              , $listaNumerica->encontrarMenorElemento([-2]));                //Menor elemento de um elemento negativo
        $this->assertEquals(0               , $listaNumerica->encontrarMenorElemento([0]));                 //Menor elemento de um elemento zero
        $this->assertEquals("Lista Vazia"   , $listaNumerica->encontrarMenorElemento([]));                  //Menor elemento de lista vazia
    }

    public function testEncontrarMenorElementoComValoresInvalidos()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals("Valores Inválidos" , $listaNumerica->encontrarMenorElemento(["a", "b", "c", "d"]));    //Menor elemento de letras
        $this->assertEquals("Valores Inválidos" , $listaNumerica->encontrarMenorElemento([1, 2, 3, "d"]));          //Menor elemento de inteiros e letras
        $this->assertEquals("Valores Inválidos" , $listaNumerica->encontrarMenorElemento([1, 2, 3, null]));         //Menor elemento de inteiros e null
    }

    public function testOrdenarLista()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals([1, 2, 3, 4]        , $listaNumerica->ordenarLista([1, 2, 3, 4]));              //Ordenar números positivos
        $this->assertEquals([-4, -3, -2, -1]    , $listaNumerica->ordenarLista([-1, -2, -3, -4]));          //Ordenar números negativos
        $this->assertEquals([-4, -1, 2, 3]      , $listaNumerica->ordenarLista([-1, 2, 3, -4]));            //Ordenar números positivos e negativos
        $this->assertEquals([0, 0, 0, 0]        , $listaNumerica->ordenarLista([0, 0, 0, 0]));              //Ordenar zeros
        $this->assertEquals([1, 2, 3, 4, 5, 6]  , $listaNumerica->ordenarLista([1, 2, "4", 5, 3, '6']));    //Ordenar com string númerica
        $this->assertEquals([1.2, 2.5, 3.7]     , $listaNumerica->ordenarLista([2.5, 3.7, 1.2]));           //Ordenar float
        $this->assertEquals([1.2, 2.5, 3.7]     , $listaNumerica->ordenarLista([2.5, '1.2', '3.7']));       //Ordenar float com string númerica
        $this->assertEquals([1]                 , $listaNumerica->ordenarLista([1]));                       //Ordenar um elemento positivo
        $this->assertEquals([-2]                , $listaNumerica->ordenarLista([-2]));                      //Ordenar um elemento negativo
        $this->assertEquals([0]                 , $listaNumerica->ordenarLista([0]));                       //Ordenar um elemento zero
        $this->assertEquals([]                  , $listaNumerica->ordenarLista([]));                        //ordenar lista vazia
    }

    public function testOrdenarListaComValoresInvalidos()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals("Valores Inválidos" , $listaNumerica->ordenarLista(["a", "b", "c", "d"]));    //Ordenar letras
        $this->assertEquals("Valores Inválidos" , $listaNumerica->ordenarLista([1, 2, 3, "d"]));          //Ordenar inteiros e letras
        $this->assertEquals("Valores Inválidos" , $listaNumerica->ordenarLista([1, 2, 3, null]));         //Ordenar inteiros e null
    }

    public function testFiltarNumerosPares()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals([2, 4]              , $listaNumerica->filtarNumerosPares([1, 2, 3, 4]));        //Filtrar números pares positivos
        $this->assertEquals([-2, -4]            , $listaNumerica->filtarNumerosPares([-1, -2, -3, -4]));    ///Filtrar números pares negativos
        $this->assertEquals([2, -4]             , $listaNumerica->filtarNumerosPares([-1, 2, 3, -4]));      //Filtrar números pares positivos e negativos
        $this->assertEquals([0, 0, 0, 0]        , $listaNumerica->filtarNumerosPares([0, 0, 0, 0]));        //Filtrar zeros
        $this->assertEquals([2, 4]              , $listaNumerica->filtarNumerosPares([1, 2, 3, "4", '5'])); //Filtrar números com string númerica
        $this->assertEquals([]                  , $listaNumerica->filtarNumerosPares([1.2, 2.5, 3.7]));     //Filtrar números float
        $this->assertEquals([]                  , $listaNumerica->filtarNumerosPares([1.2, '2.5', 3.7]));   //Filtrar com string númerica float
        $this->assertEquals([]                  , $listaNumerica->filtarNumerosPares([1]));                 //Filtrar um elemento positivo
        $this->assertEquals([-2]                , $listaNumerica->filtarNumerosPares([-2]));                //Filtrar um elemento negativo
        $this->assertEquals([0]                 , $listaNumerica->filtarNumerosPares([0]));                 //Filtrar um elemento zero
        $this->assertEquals([]                  , $listaNumerica->filtarNumerosPares([]));                  //Filtrar lista vazia
    }

    public function testFiltarNumerosParesComValoresInvalidos()
    {
        $listaNumerica = new ListaNumerica();
        $this->assertEquals("Valores Inválidos" , $listaNumerica->filtarNumerosPares(["a", "b", "c", "d"]));    //Filtrar letras
        $this->assertEquals("Valores Inválidos" , $listaNumerica->filtarNumerosPares([1, 2, 3, "d"]));          //Filtrar inteiros e letras
        $this->assertEquals("Valores Inválidos" , $listaNumerica->filtarNumerosPares([1, 2, 3, null]));         //Filtrar inteiros e null
    }
} 