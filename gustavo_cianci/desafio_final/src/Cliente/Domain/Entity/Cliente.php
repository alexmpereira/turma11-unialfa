<?php

namespace App\Cliente\Domain\Entity;


class Cliente

{
    public function __construct(private string $nome, private string $ultimoNome,
     protected string $cpf, protected string $vehicle, protected string $licensePlate)
    {

        $this->setNome($nome);
        $this->setUltimoNome($ultimoNome);
        $this->setCpf($cpf);
        $this->setVehicle($vehicle);
        $this->setLicensePlate($licensePlate);

    }


    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }


    public function setUltimoNome($ultimoNome)
    {
        $this->ultimoNome = $ultimoNome;
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

    public function getNome()
    {
        return $this->nome;
    }

    public function getUltimoNome()
    {
        return $this->ultimoNome;
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
