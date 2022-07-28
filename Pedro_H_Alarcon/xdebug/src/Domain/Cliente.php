<?php

namespace UniaAlfa\Phpxdebug\Domain;

use Exception;

class Cliente
{
    protected string $nome;
    protected string $email;
    protected string $idade;
    protected string $cpf;
    

    public function populaCliente(array $cliente) 
    {
        $this->nome = $cliente['nome'];
        $this->email = $cliente['email'];
        $this->idade = $cliente['idade'];
        $this->cpf = $cliente['cpf'];
    }

    public function imprimeDadosCliente() 
    {
        return [
            "nome" => $this->nome,
            "email" => $this->email,
            "cpf" => $this->cpf,
            "idade" => $this->idade,
        ];
    }

    private function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    private function setEmail($email)
    {
        $this->nome = $email;

        return $this;
    }

    private function setIdade($idade)
    {
        $this->nome = $idade;

        return $this;
    }

    private function setCpf($cpf)
    {
        $this->nome = $cpf;

        return $this;
    }

   
}