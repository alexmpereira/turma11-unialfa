<?php

namespace Unialfa\Phpxdebug\Adapters;

use Unialfa\Phpxdebug\Domain\Client as DomainClient;

class Client
{
    protected DomainClient $entity;

    public function __construct(array $cliente)
    {
        $this->entity = new DomainClient();
        $this->entity->populaClient($cliente);
    }

    public function imprimeDados()
    {
       return $this->entity->imprimeDadosCliente();
    }
    
}