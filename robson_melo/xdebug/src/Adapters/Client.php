<?php

namespace Unialfa\Phpxdebug\Adapters;

use Unialfa\Phpxdebug\Domain\Client as DomainClient;
use Unialfa\Phpxdebug\Domain\Endereco;
use Unialfa\Phpxdebug\Domain\Pagamento;

class Client
{
    protected DomainClient $entity;

    public function __construct(array $cliente, Endereco $endereco, Pagamento $pagamento)
    {
        $this->entity = new DomainClient();
        $this->entity->populaClient($cliente, $endereco, $pagamento);
    }

    public function imprimeDados()
    {
       return $this->entity->imprimeDadosCliente();
    }
    
}