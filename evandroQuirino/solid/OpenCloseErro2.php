<?php

interface Member
{
    public function Programador(): string;
    public function Tester(): string;
}
// Open Closed Principle Violation
class Programador
{
    public function code()
    {
        return 'coding';
    }
}

class Tester
{
    public function test()
    {
        return 'testing';
    }
}

class GerenciamentoProjeto implements Member
{
    private $programador;
    private $tester;
    public function __construct(Programador $programador, Tester $tester)
    {
        $this->programador = $programador;
        $this->tester = $tester;
    }
    public function Programador(): string
    {
        return $this->programador->code();
    }
    public function Tester(): string
    {
        return $this->tester->test();
    }
}