<?php

namespace App\CadastroDeCliente\Domain\Entity;

final class Cliente
{   
    public function __construct(
        private string $nome,
        protected string $cpf,
        private string $telefone,
        private string $marca,
        private string $veiculo,
        private string $placa,
        private string $cor,
        )
    {
       $this->setNome($nome);
       $this->setCpf($cpf);
       $this->setTelefone($telefone);
       $this->setMarca($marca);
       $this->setVeiculo($veiculo);
       $this->setPlaca($placa);
       $this->setTelefone($cor);
    }


    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;

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

    public function setCor($cor)
    {
        $this->cor = $cor;

        return $this;
    }

}
