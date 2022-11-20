<?php

namespace App\Gerenciamento\Domain\Entity;

use App\CadastroDeCliente\Domain\Entity\Cliente;

final class Historico extends Cliente
{
    public function __construct(
        private string $nome,
        protected string $cpf,
        protected string $telefone,
        protected string $marca,
        protected string $veiculo,
        protected string $placa,
        protected string $cor,
        private string $data,
        private string $hora,
        private string $servico,
        private string $valor,
        private string $status,
        private string $observacao,
        )
    {
       $this->setNome($nome);
       $this->setCpf($cpf);
       $this->setTelefone($telefone);
       $this->setMarca($marca);
       $this->setVeiculo($veiculo);
       $this->setPlaca($placa);
       $this->setCor($cor);
       $this->setServico($servico);
       $this->setData($data);
       $this->setHora($hora);
       $this->setValor($valor);
       $this->setObservacao($observacao);
       $this->setStatus($status);
    }

    public function setServico($servico)
    {
        $this->servico = $servico;

        return $this;
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

    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

}