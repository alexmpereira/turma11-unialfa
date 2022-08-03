<?php

namespace Unialfa\Phpxdebug\Domain;

use Exception;
use Unialfa\Phpxdebug\Domain\Endereco as DomainEndereco;

class Cliente
{
    protected string $nome;
    protected string $email;
    protected string $idade;
    protected string $cpf;
    protected DomainEndereco $endereco;

    public function populaCliente(array $cliente, DomainEndereco $endereco)
    {
        $this->setNome($cliente["nome"]);
        $this->setEmail($cliente["email"]);
        $this->setIdade($cliente["idade"]);
        $this->setCpf($cliente["cpf"]);
        $this->endereco = $endereco;
    }

    public function imprimirDadosCliente()
    {
        return[
            "nome"=> $this->nome,
            "email"=> $this->email,
            "cpf"=> $this->cpf,
            "idade"=> $this->idade,
            "endereco" => $this->endereco->imprimeEndereco(),
        ];
    }
  
    private function setNome($nome)
    {
        if (empty($nome)) {
            throw new Exception("O valor nao pode ser vazio");
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