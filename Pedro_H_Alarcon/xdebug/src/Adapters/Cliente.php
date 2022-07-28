<?php

namespace UniaAlfa\Phpxdebug\Adapters;

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