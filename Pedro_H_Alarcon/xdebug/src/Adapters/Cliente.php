<?php

namespace UniaAlfa\Phpxdebug\Adapters;

use UniaAlfa\Phpxdebug\Domain\Cliente as DomainCliente;

class Cliente
{

    protected DomainCliente $entity;

    public function __construct(array $cliente)
    {
        $this->entity = new DomainCliente();
        $this->entity->populaCliente($cliente);
    }

    public function imprimeDadosCliente()
    {
        return $this->entity->imprimeDadosCliente();
    }
}