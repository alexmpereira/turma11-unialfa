<?php 

namespace App\Atendimento\Domain\Entity;

use App\Cliente\Domain\Entity\Cliente;

final class Atendimento extends Cliente
{
    public function __construct(
        private string $nome,
        private string $sobrenome,
        protected string $cpf,
        protected string $veiculo,
        protected string $placa,
        protected string $telefone,
        private string $data,
        private string $hora,
        private string $servico,
        private string $valor,
        private string $status,
        private string $observacao,
        )
    {
       $this->setNome($nome);
       $this->setSobrenome($sobrenome);
       $this->setCpf($cpf);
       $this->setVeiculo($veiculo);
       $this->setPlaca($placa);
       $this->setTelefone($telefone);
       $this->setData($data);
       $this->setHora($hora);
       $this->setServico($servico);
       $this->setValor($valor);
       $this->setStatus($status);
       $this->setObservacao($observacao);
    }

    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    public function setServico($servico)
    {
        $this->servico = $servico;

        return $this;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }
}