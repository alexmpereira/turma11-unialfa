<?php

namespace App\Domain\Activities;
use App\Domain\Entity\Client;

final class HistoryDay extends Client
{
    public function startCar()
    {
        return "O {$this->client->getNome()} ligou seu carro {$this->client->getCarClient()}";
    }

    public function offCar()
    {
        return "O {$this->client->getNome()} desligou seu carro {$this->client->getCarClient()}";
    }

    public function refuelCar()
    {
        return "O {$this->client->getNome()} abasteceu seu carro {$this->client->getCarClient()}";
    }

    public function changeCarOil()
    {
        return "O {$this->client->getNome()} trocou o oleo do seu carro {$this->client->getCarClient()}";
    }

    public function reviewCar()
    {
        return "O {$this->client->getNome()} fez uma revisão no seu carro {$this->client->getCarClient()}";
    }

}