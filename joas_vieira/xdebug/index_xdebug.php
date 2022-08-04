<?php

use Unialfa\PhpXDebug\Adapters\Cliente;
use Unialfa\PhpXDebug\Domain\Endereco;

require_once __DIR__ . '/vendor/autoload.php';

$mockCliente = [
    'nome' => 'any_name',
    'email' => 'any_email@mail.com',
    'idade' => 18,
    'cpf' => 'any_cpf',
];

$mockEndereco = [
    'cidade' => 'any_cidade',
    'endereco' => 'any_endereco',
    'numero' => 123,
];

$endereco = new Endereco($mockEndereco);
$cliente = new Cliente($mockCliente, $endereco);

echo json_encode($cliente->imprimeDados());