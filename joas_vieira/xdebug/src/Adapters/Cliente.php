<?php

namespace Unialfa\PhpXDebug\Adapters;

use Unialfa\PhpXDebug\Domain\Cliente as DomainCliente;
use Unialfa\PhpXDebug\Domain\Endereco;

class Cliente
{
    protected DomainCliente $entity;

    public function __construct(array $cliente, Endereco $endereco)
    {
        $this->entity = new DomainCliente();
        $this->entity->populaCliente($cliente, $endereco);
    }

    public function imprimeDados()
    {
        return $this->entity->imprimeDadosCliente();
    }
}