<?php

namespace App\Domain\Entity;

final class Car
{
    public function __construct(
        private string $name,
        private string $model,
        private int $year
    )
    {
        $this->name = $name;
        $this->year = $year;
        $this->model = $model;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }
}