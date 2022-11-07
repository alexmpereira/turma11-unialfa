<?php

use App\CadastroDeCliente\Domain\Entity\Cliente;

interface ClienteRepository
{
    public function create(Cliente $cliente);
}