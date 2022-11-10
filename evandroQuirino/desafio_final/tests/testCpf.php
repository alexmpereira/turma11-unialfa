<?php

use Tests\TestCase;
use Unialfa\Poo\Domain\CPF;

class CPFTest extends TestCase
{
    public function testCpfValido()
    {
        $cpf = new CPF('999.999.999-99');
        $this->assertEquals('999.999.999-99', $cpf->__toString());
    }

    public function testCpfInvalido()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('CPF inválido');
        (new CPF('999.999.999-98'));
    }
}
