<?php

namespace UniaAlfa\Phpxdebug\Adapters;

use UniaAlfa\Phpxdebug\Domain\Cliente as DomainCliente;
use UniaAlfa\Phpxdebug\Domain\Endereco;

class Cliente
{

    protected DomainCliente $entity;

    public function __construct(array $cliente, Endereco $endereco)
    {
        $this->entity = new DomainCliente();
        $this->entity->populaCliente($cliente, $endereco);
    }

    public function imprimeDadosCliente()
    {
        return $this->entity->imprimeDadosCliente();
    }
}