<?php

namespace App\Atendimento\Domain\Entity;
use App\Cliente\Domain\Entity\Cliente;

final class Atendimento extends Cliente
{
    public function __construct(


        private string $nome,
        private string $ultimoNome,
        protected string $cpf,
        protected string $vehicle,
        protected string $licensePlate,
        private string $service,
        private string $dayDelivery,
        private string $valueWork
    ){

        $this->setNome($nome);
        $this->setUltimoNome($ultimoNome);
        $this->setCpf($cpf);
        $this->setVehicle($vehicle);
        $this->setLicensePlate($licensePlate);
        $this->setService($service);
        $this->setDayDelivery($dayDelivery);
        $this->setValueWork($valueWork);
    }


    public function setService($service){
        $this->service = $service;
        return $this;
    }


    public function setDayDelivery($dayDelivery){
        $this->dayDelivery = $dayDelivery;
        return $this;
    }
    

    public function setValueWork($valueWork){
        $this->valueWork = $valueWork;
        return $this;
    }

  
}