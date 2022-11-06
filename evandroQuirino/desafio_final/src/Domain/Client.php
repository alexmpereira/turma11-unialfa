<?php

namespace Unialfa\Poo\Domain;

class Client
{
    public function __construct(
        private string $name,
        private string $lastName,
        private CPF $cpf,
        private Car $car
    ) {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->cpf = $cpf;
        $this->car = $car;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getCpf(): CPF
    {
        return $this->cpf;
    }

    public function getCar(): Car
    {
        return $this->car;
    }
}
