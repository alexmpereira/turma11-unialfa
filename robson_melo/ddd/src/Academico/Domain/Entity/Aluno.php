<?php

namespace App\Academico\Domain\Entity;

use App\Contabilidade\Domain\Entity\Cliente;

final class Aluno extends Cliente
{
    public function __construct(
        private string $nome,
        private string $sobrenome,
        private int $idade,
        protected string $cpf,
        private string $matricula,
        private string $curso
    ) 
    {
        $this->setNome($nome);
        $this->setSobrenome($sobrenome);
        $this->setIdade($idade);
        $this->setCpf($cpf);
        $this->setMatricula($matricula);
        $this->setCurso($curso);
    }

    public function buscaDadosReceitaFederal()
    {
        // busca dados da receita federal
        return [];
    }
    public function buscaRelatorioBoletos()
    {
        // busca relatorio de boletos
        return [];
    }

    public function setNome($nome)
    {
        // valida nome com regras do negocio
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
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }
}