<?php

namespace Tests\Unit\Domain\Entity;

use App\CadastroDeCliente\Domain\Entity\Cliente;
use PHPUnit\Framework\TestCase;

class ClienteTest extends TestCase
{
    public function testSeMetodoClienteExiste()
    {
        $this->assertTrue(
            method_exists(new Cliente(), "cliente"),
            "A classe não tem o método cliente"
        );
    }

    public function testSeMetodoClienteRetornaArray()
    {
        $this->assertIsArray(
            (new Cliente())->cliente(),
            "O método cliente não está retornando nada"
        );
    }

    public function testSeMetodoClienteRetornaNome()
    {
        $this->assertArrayHasKey(
            "nome",
            (new Cliente())->cliente(),
            "O método cliente não está retornando o nome"
        );
    }

    public function testSeMetodoClienteRetornaCpf()
    {
        $this->assertArrayHasKey(
            "cpf",
            (new Cliente())->cliente(),
            "O método cliente não está retornando o cpf"
        );
    }

    public function testSeMetodoClienteRetornaTelefone()
    {
        $this->assertArrayHasKey(
            "telefone",
            (new Cliente())->cliente(),
            "O método cliente não está retornando o telefone"
        );
    }

    public function testSeMetodoClienteRetornaMarca()
    {
        $this->assertArrayHasKey(
            "sobrenome",
            (new Cliente())->cliente(),
            "O método cliente não está retornando a marca do veiculo"
        );
    }

    

    public function testSeMetodoClienteRetornaVeiculo()
    {
        $this->assertArrayHasKey(
            "veiculo",
            (new Cliente())->cliente(),
            "O método cliente não está retornando o nome do veiculo"
        );
    }

    public function testSeMetodoClientePlaca()
    {
        $this->assertArrayHasKey(
            "placa",
            (new Cliente())->cliente(),
            "O método cliente não está retornando a placa"
        );
    }

    
}