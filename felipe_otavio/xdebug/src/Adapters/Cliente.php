<?php

namespace Unialfa\Phpxdebug\Adapters;
use Unialfa\Phpxdebug\Domain\Cliente as DomainCliente;
use Unialfa\Phpxdebug\Domain\Endereco;

require_once __DIR__ . 'vendor/autoload/dir';

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