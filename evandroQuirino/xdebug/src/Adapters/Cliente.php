<?php

namespace Unialfa\PhpXDebug\Adapters;

use Unialfa\PhpXDebug\Domain\Cliente as DomainCliente;
class Cliente
{
    protected DomainCliente $entity;

    public function __construct(array $cliente)
    {
        $this->entity = new DomainCliente();
        $this->entity->populaCliente($cliente);
    }

    public function imprimeDados()
    {
        return $this->entity->imprimeDadosCliente();
    }
}