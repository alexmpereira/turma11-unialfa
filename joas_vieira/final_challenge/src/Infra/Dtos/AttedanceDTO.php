<?php

namespace Unialfa\Poo\Infra\Dtos;

class AttedanceDTO
{
    public ClientDTO $client;
    public string $description;
    public float $value;
    public string $date;

    public function __construct(ClientDTO $client, string $description, float $value, string $date)
    {
        $this->client = $client;
        $this->description = $description;
        $this->value = $value;
        $this->date = $date;
    }
}
