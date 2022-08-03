<?php

namespace Unialfa\Phpxdebug\Adapters;
use Unialfa\Phpxdebug\Domain\Cliente as DomainCliente;
use Unialfa\Phpxdebug\Domain\Endereco;

class Cliente 
{
   protected DomainCliente $entity;

   public function __construct(array $cliente, Endereco $endereco)
   {
      $this->entity = new DomainCliente();
      $this->entity->populaCliente($cliente, $endereco);
   }

   public function imprimirDados()
   {
    return $this->entity->imprimirDadosCliente();
     
   }
}