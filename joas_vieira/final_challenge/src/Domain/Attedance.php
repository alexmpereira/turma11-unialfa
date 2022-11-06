<?php

namespace Unialfa\Poo\Domain;

class Attedance
{
    public function __construct(
        private Client $client,
        private string $description,
        private float $value,
        private string $date,
    )
    {
        $this->client = $client;
        $this->description = $description;
        $this->value = $value;
        $this->date = $date;
    }

    public function getClient(): Client
    {
        return $this->client;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function getDate(): string
    {
        return $this->date;
    }
}
