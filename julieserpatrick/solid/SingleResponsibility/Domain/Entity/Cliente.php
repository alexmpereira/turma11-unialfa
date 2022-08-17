<?php 

class cliente
{
    protected string $name;
    protected string $cpf;
    protected int $age;

    public function __construct(array $cliente)
    {
        $this->setName($cliente['name']);
        $this->setCpf($cliente['cpf']);
        $this->setAge($cliente['age']);
    }

    public function setCpf(string $cpf)
    {
        $this->cpf = $cpf;
    }

    public function setAge(int $age)
    {
            if ($age < 18) {
                throw new Exception('Precisa ser maior de 18 anos');
            }
            $this->age = $age;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getName(): string
    {
        return $this->name;
    }
}