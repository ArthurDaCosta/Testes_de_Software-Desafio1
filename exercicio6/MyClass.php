<?php

class MyClass
{
    public $a;
    public $b;
    public $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function __clone()
    {
        $this->a = $this->a . 'clone';
        $this->b = $this->b . 'clone';
        $this->c = $this->c . 'clone';
    }

    public function addMethod()
    {
        return true;
    }

    public function __autoload()
    {
        return true;
    }
}