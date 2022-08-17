<?php

// Open Closed Principle Violation

use Programador as GlobalProgramador;

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
    public function Work()
    {
        return 'testing';
    }
}

class GerenciamentoProjeto
{
    public function process(Trabalhavel $member)
    {
        return $member->work();
    }
}

$programador = new GlobalProgramador();
$gereciamento = new GerenciamentoProjeto();
echo $gereciamento->process($programador);