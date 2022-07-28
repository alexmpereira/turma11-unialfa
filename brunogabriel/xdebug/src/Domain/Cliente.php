<?php

namespace Unialfa\Phpxdebug\Domain;

use Exception;

class Cliente
{
    protected string $nome;
    protected string $email;
    protected int $idade;
    protected string $cpf;

    public function populaCliente(array $cliente)
    {
        $this->setNome($cliente["nome"]);
        $this->setEmail($cliente["email"]);
        $this->setIdade($cliente["idade"]);
        $this->setCpf($cliente["cpf"]);
    }

    public function imprimeDadosCliente()
    {
        return [
            "nome" => $this->nome,
            "email" => $this->email,
            "cpf" => $this->cpf,
            "idade" => $this->idade
        ];
    }

    private function setNome($nome)
    {
        if (empty($nome)) {
            throw new Exception("O campo nome não pode ser preenchido");
        }

        $this->nome = $nome;

        return $this;
    }

    private function setEmail($email)
    {
        if (empty($email)) {
            throw new Exception("O campo email não pode ser preenchido");
        }

        $this->email = $email;

        return $this;
    }

    private function setIdade($idade)
    {
        if (empty($idade)) {
            throw new Exception("O campo idade não pode ser preenchido");
        }

        $this->idade = $idade;

        return $this;
    }

    private function setCpf($cpf)
    {
        if (empty($cpf)) {
            throw new Exception("O campo cpf não pode ser preenchido");
        }

        $this->cpf = $cpf;

        return $this;
    }

   
}