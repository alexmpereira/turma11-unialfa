<?php

namespace Unialfa\Poo\Application;

use Unialfa\Poo\Domain\Attedance;
use Unialfa\Poo\Domain\Car;
use Unialfa\Poo\Domain\Client;
use Unialfa\Poo\Domain\CPF;
use Unialfa\Poo\Infra\Dtos\AttedanceDTO;

class AttedanceAction
{
    protected Attedance $attedance;

    public function __construct(AttedanceDTO $attedanceDTO)
    {
        $car = new Car(
            $attedanceDTO->client->car->brand,
            $attedanceDTO->client->car->model,
            $attedanceDTO->client->car->year,
            $attedanceDTO->client->car->color
        );

        $client = new Client(
            $attedanceDTO->client->name,
            $attedanceDTO->client->lastName,
            new CPF($attedanceDTO->client->cpf),
            $car
        );

        $this->attedance = new Attedance(
            $client,
            $attedanceDTO->description,
            $attedanceDTO->value,
            $attedanceDTO->date
        );
    }

    public function action(): Attedance
    {
        return $this->attedance;
    }
}
