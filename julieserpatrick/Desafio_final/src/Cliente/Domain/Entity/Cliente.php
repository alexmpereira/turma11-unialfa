<?php

namespace App\Cliente\Domain\Entity;


class Cliente
{
    public function __construct(private string $name, private string $lastName, protected string $cpf, protected string $vehicle, protected string $licensePlate)
    {

        $this->setName($name);
        $this->setLastName($lastName);
        $this->setCpf($cpf);
        $this->setVehicle($vehicle);
        $this->setLicensePlate($licensePlate);

    }

    public function setName($name)
    {

        $this->name = $name;
        return $this;

    }

    public function setLastName($lastName)
    {

        $this->lastName = $lastName;
        return $this;

    }

    public function setCpf($cpf)
    {

        $this->cpf = $cpf;
        return $this;
        
    }

    public function setVehicle($vehicle)
    {

        $this->vehicle = $vehicle;
        return $this;

    }

    public function setLicensePlate($licensePlate)
    {

        $this->licensePlate = $licensePlate;
        return $this;

    }

    public function getName()
    {

        return $this->name;

    }

    public function getLastName()
    {

        return $this->lastName;

    }

    public function getCpf()
    {

        return $this->cpf;

    }

    public function getVehicle()
    {

        return $this->vehicle;

    }

    public function getLicensePlate()
    {

        return $this->licensePlate;
        
    }
}
