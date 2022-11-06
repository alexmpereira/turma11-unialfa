<?php

use PHPUnit\Framework\TestCase;
use Unialfa\Poo\Domain\CPF;

class CPFTest extends TestCase
{
    public function testIsValidCPFIsSuccess()
    {
        $cpf = new CPF('123.456.789-01');

        $this->assertEquals('123.456.789-01', $cpf->__toString());
    }

    public function testIsInvalidCPFShouldThrowException()
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('Invalid CPF');

        (new CPF('123.456.789'));
    }
}