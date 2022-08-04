<?php

namespace Unialfa\Phpxdebug\Domain;

use Exception;

class Client
{
    protected string $nome;
    protected string $email;
    protected string $idade;
    protected string $cpf;
    protected Endereco $endereco;
    protected Pagamento $tipoPagamento;
    
    public function populaClient(
        array $client,
        Endereco $endereco,
        Pagamento $tipoPagamento
        )
    {
        $this->setNome($client["nome"]);
        $this->setEmail($client["email"]);
        $this->setIdade($client["idade"]);
        $this->setCpf($client["cpf"]);
        $this->endereco = $endereco;
        $this->tipoPagamento = $tipoPagamento;
    }

    public function imprimeDadosCliente()
    {
        return [
            "nome"=> $this->nome,
            "email"=> $this->email,
            "idade"=> $this->idade,
            "cpf"=> $this->cpf,
            "endereco"=> $this->endereco->imprimeEndereco(),
            "tipoPagamento"=> $this->pagamento->setTipoPagamanto()
        ];
    }

    private function setNome($nome)
    {
        if(empty($nome)){
            throw new Exception("o campo nome não pode estar vazio.");
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