<?php

// Open Closed Principle Violation

interface Trabalhavel 
{
    public function work();     
}

class Programador implements Trabalhavel
{
    public function work()
    {
        return 'coding';
    }
}

class Tester implements Trabalhavel
{
    public function work()
    {
        return 'testing';
    }
}

class GerenciamentoProjeto
{
    public function process($member)
    {
        return $member->work();
    }
}

$programador = new Programador();
$gerenciamento = new GerenciamentoProjeto();
echo $gerenciamento->process($programador);