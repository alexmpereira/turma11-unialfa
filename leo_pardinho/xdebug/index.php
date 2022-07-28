<?php

use Unialfa\Phpxdebug\Adapters\Cliente;

require_once __DIR__.'/vendor/autoload.php';

$mockCliente = [
    "nome"=>"teste",
    "email"=>"teste@gmail.com",
    "idade"=>32,
    "cpf"=>"123456",
];


$cliente = new Cliente($mockCliente);

echo json_encode($cliente->imprimirDados());

