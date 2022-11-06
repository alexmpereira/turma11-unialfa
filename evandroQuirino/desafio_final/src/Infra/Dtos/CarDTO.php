<?php

namespace Unialfa\Poo\Infra\Dtos;

class CarDTO
{
    public string $brand;
    public string $model;
    public int $year;
    public string $color;

    public function __construct(string $brand, string $model, int $year, string $color)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
    }
}
