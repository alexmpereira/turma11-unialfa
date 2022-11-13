<?php

namespace Tests\Unit\Domain\Entity;

use App\Domain\Entity\Client;
use PHPUnit\Framework\TestCase;

class ClientTeste extends TestCase
{
    public function testIfTheMethodClientExists()
    {
        $this->assertTrue(
            method_exists(new Client(), 'client'),
            "the class does not have the method client"
        );
    }

    public function testIfTheClientMethodreturnsArray()
    {
        $this->assertIsArray(
            (new Client())->client(),
            "The client method is not returning an array"
        );
    }

    public function testIfTheClientMethodreturnsArrayWith4Index()
    {
        $this->assertCount(
            4,
            (new Client())->client(),
            "The client method is not returning an array with 4 indices"
        );
    }

    public function testIfTheClientMethodreturnsArrayWithIndexName()
    {
        $this->assertArrayHasKey(
            "name",
            (new Client())->client(),
            "The Client method is not returning an array with index name"
        );
    }

    public function testIfTheClientMethodreturnsArrayWithIndexAge()
    {
        $this->assertArrayHasKey(
            "age",
            (new Client())->client(),
            "The Client method is not returning an array with index age"
        );
    }

    public function testIfTheClientMethodreturnsArrayWithIndexCpf()
    {
        $this->assertArrayHasKey(
            "cpf",
            (new Client())->client(),
            "The Client method is not returning an array with index cpf"
        );
    }

    public function testIfTheClientMethodreturnsArrayWithIndexCar()
    {
        $this->assertArrayHasKey(
            "car",
            (new Client())->client(),
            "The Client method is not returning an array with index car"
        );
    }
}