<?php

namespace Tests\Unit\Domain\Entity;

use App\Cliente\Domain\Entity\Cliente;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function test_se_metodo_cliente_existe()
    {
        $this->assertTrue(
            method_exists(new Cliente(), "cliente"),
            "A classe não tem o método cliente"
        );
    }

    public function test_se_metodo_cliente_retorna_array()
    {
        $this->assertIsArray(
            (new Cliente())->cliente(),
            "O método cliente não está retornando um array"
        );
    }

    public function test_se_metodo_cliente_retorna_array_com_6_indices()
    {
        $this->assertCount(
            6,
            (new Cliente())->cliente(),
            "O método cliente não está retornando um array com 6 indices"
        );
    }

    public function test_se_metodo_cliente_retorna_array_com_indices_nome()
    {
        $this->assertArrayHasKey(
            "nome",
            (new Cliente())->cliente(),
            "O método cliente não está retornando um array com o indice nome"
        );
    }

    public function test_se_metodo_cliente_retorna_array_com_indices_sobrenome()
    {
        $this->assertArrayHasKey(
            "sobrenome",
            (new Cliente())->cliente(),
            "O método cliente não está retornando um array com o indice sobrenome"
        );
    }

    public function test_se_metodo_cliente_retorna_array_com_indices_cpf()
    {
        $this->assertArrayHasKey(
            "cpf",
            (new Cliente())->cliente(),
            "O método cliente não está retornando um array com o indice cpf"
        );
    }

    public function test_se_metodo_cliente_retorna_array_com_indices_veiculo()
    {
        $this->assertArrayHasKey(
            "veiculo",
            (new Cliente())->cliente(),
            "O método cliente não está retornando um array com o indice veiculo"
        );
    }

    public function test_se_metodo_cliente_retorna_array_com_indices_placa()
    {
        $this->assertArrayHasKey(
            "placa",
            (new Cliente())->cliente(),
            "O método cliente não está retornando um array com o indice placa"
        );
    }

    public function test_se_metodo_cliente_retorna_array_com_indices_telefone()
    {
        $this->assertArrayHasKey(
            "telefone",
            (new Cliente())->cliente(),
            "O método cliente não está retornando um array com o indice telefone"
        );
    }
}