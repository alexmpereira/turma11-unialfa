<?php

namespace App\Contabilidade\Domain\Entity;

use App\Contabilidade\Utils\validaCpf;
use Exception;

final class Cliente
{

    protected string $dadosReceitaFederal;
    private array $boletosEmAtraso;
    private array $boletos;

    public function __construct(
        private string $nome,
        private string $sobrenome,
        private int $idade,
        protected string $cpf
    ) {
        $this->setNome($nome);
        $this->setSobrenome($sobrenome);
        $this->setIdade($idade);
        $this->setCpf($cpf);

        return [
            $this->nome,
            $this->sobrenome,
            $this->idade,
            $this->cpf
        ];
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
        if ($nome) {
            throw new Exception("O Sobrenome não pode ser vazio");
        }
        $this->nome = $nome;

        return $this;
    }

    public function setSobrenome($sobrenome)
    {
        if ($sobrenome) {
            throw new Exception("O Sobrenome não pode ser vazio");
        }

        $this->sobrenome = $sobrenome;

        return $this;
    }

    public function setIdade($idade)
    {
        if ($idade < 18) {
            throw new Exception("Não pode ser menor de 18 anos");
        }

        $this->idade = $idade;

        return $this;

        
    }

    public function setCpf($cpf)
    {
        $isValid = new validaCpf($cpf);
        if ($isValid) {
            throw new Exception("CPF Invalido");
        }

        $this->cpf = $cpf;
        return $this;
    }

    public function setDadosReceitaFederal($dadosReceitaFederal)
    {
        $this->dadosReceitaFederal = $dadosReceitaFederal;

        return $this;
    }

    public function setBoletosEmAtraso($boletosEmAtraso)
    {
        $this->boletosEmAtraso = $boletosEmAtraso;

        return $this;
    }

    public function setBoletos($boletos)
    {
        $this->boletos = $boletos;

        return $this;
    }
}
