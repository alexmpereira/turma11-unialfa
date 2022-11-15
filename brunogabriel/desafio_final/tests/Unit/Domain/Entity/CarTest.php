<?php

namespace Tests\Unit\Domain\Entity;

use App\Domain\Entity\Car;
use PHPUnit\Framework\TestCase;

class CarTeste extends TestCase
{
    public function testIfTheMethodCarExists()
    {
        $this->assertTrue(
            method_exists(new Car(), 'car'),
            "the class does not have the method car"
        );
    }

    public function testIfTheCarMethodreturnsArray()
    {
        $this->assertIsArray(
            (new Car())->car(),
            "The car method is not returning an array"
        );
    }

    public function testIfTheCarMethodreturnsArrayWith3Index()
    {
        $this->assertCount(
            3,
            (new Car())->car(),
            "The car method is not returning an array with 3 indices"
        );
    }

    public function testIfTheCarMethodreturnsArrayWithIndexName()
    {
        $this->assertArrayHasKey(
            "name",
            (new Car())->car(),
            "The Car method is not returning an array with index name"
        );
    }

    public function testIfTheCarMethodreturnsArrayWithIndexModel()
    {
        $this->assertArrayHasKey(
            "model",
            (new Car())->car(),
            "The Car method is not returning an array with index model"
        );
    }

    public function testIfTheCarMethodreturnsArrayWithIndexYear()
    {
        $this->assertArrayHasKey(
            "year",
            (new Car())->car(),
            "The Car method is not returning an array with index year"
        );
    }

}