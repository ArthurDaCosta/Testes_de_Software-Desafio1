<?php

use PHPunit\Framework\TestCase;
require_once 'MyClass.php';

class MyClassTest extends TestCase
{
    public function testAddMethods()
    {
        $mock = $this->getMockBuilder('MyClass')
            ->setConstructorArgs(array(1, 2, 3))
            ->addMethods(array('Teste', 'Teste2'))
            ->getMock();

        $this->assertTrue(method_exists($mock, 'Teste'));
        $this->assertTrue(method_exists($mock, 'Teste2'));
    }

    public function testSetConstructorArgs()
    {
        $mock = $this->getMockBuilder('MyClass')->addMethods(array('a'))
            ->setConstructorArgs(array(1, 2, 3))
            ->getMock();

        $this->assertEquals(1, $mock->a);
        $this->assertEquals(2, $mock->b);
        $this->assertEquals(3, $mock->c);
    }

    public function testSetMockClassName()
    {
        $mock = $this->getMockBuilder('MyClass')
            ->setMockClassName('MyMock')
            ->setConstructorArgs(array(1, 2, 3))
            ->getMock();
        
        $this->assertEquals('MyMock', get_class($mock));
    }

    public function testDisableOriginalConstructor()
    {
        $mock = $this->getMockBuilder('MyClass')
            ->disableOriginalConstructor()
            ->getMock();

        $this->assertEquals(null, $mock->a);
        $this->assertEquals(null, $mock->b);
        $this->assertEquals(null, $mock->c);
    }

    public function testDisableOriginalClone()
    {
        $mock = $this->getMockBuilder('MyClass')
            ->setConstructorArgs(array(1, 2, 3))
            ->disableOriginalClone()
            ->getMock();

        $clone = clone $mock;

        $this->assertEquals('1', $clone->a);
        $this->assertEquals('2', $clone->b);
        $this->assertEquals('3', $clone->c);
    }

    public function testDisableAutoload()
    {
        $mock = $this->getMockBuilder('Teste')
            ->disableAutoload()
            ->getMock();

        
    }

    public function testMethodWillReturn()
    {
        $mock = $this->createMock('MyClass');

        $mock->expects($this->any())
            ->method('addMethod')
            ->willReturn(10);

        $this->assertEquals(10, $mock->addMethod());
    }

    public function testMethodReturnSelf()
    {
        $mock = $this->createMock('MyClass');

        $mock->expects($this->any())
                ->method('addMethod')
                ->willReturnSelf();
       

        $this->assertEquals($mock, $mock->addMethod());
    }
}

/* Documentação:

    testAddMethods() - Criar dois novos métodos na classe Mock da MyClass para testar se ela é capaz de receber novos métodos.
    testSetConstructorArgs() - Define valores para o construtor da classe MyClass através de um mock e testa se os valores foram definidos corretamente.
    testSetMockClassName() - Altera o nome da mock da classe MyClass e testa se o nome da classe do mock foi alterado com sucesso.
    testDisableOriginalConstructor() - Remove a necessidade de definir os membros do construtor na classe mock e testa se eles foram definidos commo nulo.
    testDisableOriginalClone() - Testa se o método __clone da classe MyClass foi desabilitado.
    testDisableAutoload() - Testa se o método __autoload da classe MyClass foi desabilitado.
    testMethodWillReturn() - Testa se o método addMethod da classe MyClass retorna 10.
    testMethodReturnSelf() - Testa se o método addMethod da classe MyClass retorna a própria instância da classe.
