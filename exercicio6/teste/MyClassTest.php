<?php

use PHPunit\Framework\TestCase;
require_once 'MyClass.php';

class MyClassTest extends TestCase
{
    public function testAddMethods()
    {
        $mock = $this->getMockBuilder('MyClass')
            ->setConstructorArgs(array(1, 2, 3))
            ->addMethods(array('Teste'))
            ->getMock();

        $this->assertTrue(method_exists($mock, 'Teste'));
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
        $mock = $this->getMockBuilder('MyClass')
            ->disableOriginalConstructor()
            ->disableAutoload() 
            ->getMock();


    }

    public function testMethodWillReturn()
    {
        $mock = $this->getMockBuilder('MyClass')
            ->disableOriginalConstructor()
            ->onlyMethods(array('addMethod'))
            ->getMock();

        $mock->expects($this->any())
            ->method('addMethod')
            ->willReturn(10);

        $this->assertEquals(10, $mock->addMethod());
    }

    public function testMethodReturnSelf()
    {
        $mock = $this->getMockBuilder('MyClass')
            ->disableOriginalConstructor()
            ->onlyMethods(array('addMethod'))
            ->getMock();

        $mock->expects($this->any())
            ->method('addMethod')
            ->willReturnSelf();

        $this->assertEquals($mock, $mock->addMethod());
    }
}