<?php

namespace App\Contabilidade\Domain\Entity;

final class Cliente
{   
    public function __construct(
        private string $nome,
        private string $sobrenome,
        protected string $cpf,
        protected string $veiculo,
        protected string $placa,
        protected string $telefone,
        )
    {
       $this->setNome($nome);
       $this->setSobrenome($sobrenome);
       $this->setCpf($cpf);
       $this->setVeiculo($veiculo);
       $this->setPlaca($placa);
       $this->setTelefone($telefone);
    }


    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function setVeiculo($veiculo)
    {
        $this->veiculo = $veiculo;

        return $this;
    }

    public function setPlaca($placa)
    {
        $this->placa = $placa;

        return $this;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }
}