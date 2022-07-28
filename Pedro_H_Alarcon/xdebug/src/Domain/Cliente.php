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

        if (empty($nome)) {
            throw new Exception("O campo nome não pode ser vazio");
        }
        $this->nome = $nome;

        return $this;
    }

    private function setEmail($email)
    {   
        if (empty($email)) {
            throw new Exception("O campo email não pode ser vazio");
        }
        $this->nome = $email;

        return $this;
    }

    private function setIdade($idade)
    {
        if (empty($idade)) {
            throw new Exception("O campo idade não pode ser vazio");
        }
        $this->nome = $idade;

        return $this;
    }

    private function setCpf($cpf)
    {
        if (empty($cpf)) {
            throw new Exception("O campo cpf não pode ser vazio");
        }
        $this->nome = $cpf;

        return $this;
    }

   
}