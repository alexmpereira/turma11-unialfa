<?php

class Cliente
{
    protected string $name;
    protected string $cpf;
    protected int $age;


    public function __construct(array $cliente)
    {
        $this->setName($cliente["name"]);
        $this->setCpF($cliente["cpf"]);
        $this->setAge($cliente["age"]);
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setCpF($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function setAge($age)
    {

        if ($age < 18) {
            throw new Exception("Nâo pode entrar meu chapa");
            
        }
        $this->age = $age;
        return $this;
    }



    // public funciton getName()
    // {
    //     return $this->name;
    // }



    // public funciton getCpf()
    // {
    //     return $this->cpf;
    // }


    // public funciton getAge(){

    //     return $this->age;
    // }
}

