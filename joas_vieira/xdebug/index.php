<?php

use Unialfa\PhpXDebug\Adapters\Cliente;

require_once __DIR__ . '/vendor/autoload.php';

$mockCliente = [
    'nome' => 'any_name',
    'email' => 'any_email@mail.com',
    'idade' => 18,
    'cpf' => 'any_cpf',
];

$cliente = new Cliente($mockCliente);

echo json_encode($cliente->imprimeDados());