<?php

namespace App\Contabilidade\Domain\Entity;

final class Cliente
{
    protected array $dadosReceitaFederal;
    private array $boletosEmAtraso;
    private array $boletos;
    
    

    public function __construct(
        private string $nome,
        private string $sobrenome,
        private int $idade,
        protected string $cpf
    )
    {
        $this->setNome($nome);
        $this->setSobrenome($sobrenome);
        $this->setIdade($idade);
        $this->setCpf($cpf);
        $this->getNome();
    }
    

    public function buscaDadosReceitaFederal()
    {
        return [];
    }

    public function buscaRelatorioBoletos()
    {
        return [];
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

    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function getNome()
    {

        return $this->nome;
    }
}