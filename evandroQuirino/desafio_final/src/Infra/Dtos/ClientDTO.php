<?php

namespace Unialfa\Poo\Infra\Dtos;

class ClientDTO
{
    public string $name;
    public string $lastName;
    public string $cpf;
    public CarDTO $car;

    public function __construct(string $name, string $lastName, string $cpf, CarDTO $car)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->cpf = $cpf;
        $this->car = $car;
    }
}
