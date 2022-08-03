<?php

namespace Unialfa\Phpxdebug\Domain;

use Exception;

class Cliente
{
    protected string $nome;
    protected string $email;
    protected int $idade;
    protected string $cpf;
    protected Endereco $endereco;

    public function populaCliente(array $cliente, Endereco $endereco)
    {        
        $this->setNome($cliente["nome"]);
        $this->setEmail($cliente["email"]);
        $this->setIdade($cliente["idade"]);
        $this->setCpf($cliente["cpf"]);
        $this->endereco= $endereco;
    }

    public function imprimiDadosCliente()
    {
        return [
            "nome" => $this->nome,
            "email" => $this->email,
            "idade" => $this->idade,
            "cpf" => $this->cpf,
            "endereco" =>$this->endereco->imprimeEndereco(),
        ];
    }

    private function setNome($nome)
    {
        if(empty ($nome)){
            throw new Exception("O campo nome não pode ser vazio");
        }
        
        $this->nome = $nome;

        return $this;
    }

    private function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    private function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    private function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }
}