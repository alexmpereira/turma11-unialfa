<?php

namespace App\Contabilidade\Domain\Entity;
use App\Contabilidade\Domain\Entity\Cliente;

final class Boleto
{
    public function __construct(
        private string $codigo,
        private string $dataVencimento,
        private string $valor,
        private string $status,
        private Cliente $cliente
    ) 
    {
        $this->setCodigo($codigo);
        $this->setDataVencimento($dataVencimento);
        $this->setValor($valor);
        $this->setStatus($status);
        $this->setCliente($cliente);
    }
    
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }
    public function setDataVencimento($dataVencimento)
    {
        $this->dataVencimento = $dataVencimento;

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
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

}
