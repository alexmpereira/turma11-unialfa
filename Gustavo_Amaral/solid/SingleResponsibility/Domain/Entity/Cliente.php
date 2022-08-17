<?php

Class Cliente
{
    protected string $name;
    protected string $cpf;
    protected int $age;

    public function __construct(array $cliente)
    {
        $this->setName($cliente["name"]);
        $this->setCpf($cliente["cpf"]);
        $this->setAge($cliente["age"]);
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function setAge($age)
    {
        if ($age < 18){
            throw new Exception("Não pode ser menor de 18 anos");
        }

        $this->age = $age;

        return $this;
    }

    public function getName()
    {
        $this->name;

        return $this;
    }

    public function getCpf()
    {
        $this->cpf;

        return $this;
    }

    public function getAge()
    {
        $this->age;

        return $this;
    }
}