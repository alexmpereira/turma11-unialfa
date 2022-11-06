<?php

namespace Unialfa\Poo\Domain;

class Car
{
    public function __construct(
        private string $brand,
        private string $model,
        private int $year,
        private string $color,
    ) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}
