<?php

namespace App\Domain\Entity;

final class Client
{
    public function __construct(
        private string $name,
        private int $age,
        private string $cpf,
        private Car $car
    )
    {
        $this->name = $name;
        $this->age = $age;
        $this->cpf = $cpf;
        $this->car = $car;
    }

    public function getNameClient()
    {
        return $this->name;
    }

    public function getAgeClient()
    {
        return $this->age;
    }

    public function getCpfClient()
    {
        return $this->cpf;
    }

    public function getCarClient()
    {
        return $this->car->getModel();
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function setCar($car)
    {
        $this->car = $car;

        return $this;
    }

}