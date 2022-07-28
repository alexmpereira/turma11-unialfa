<?php
echo phpinfo(); exit;
use Unialfa\Phpxdebug\Adapters\Cliente;

require_once __DIR__ . '/vendor/autoload.php';

$mockCliente = [
    "nome" => "Teste",
    "email" => "teste@gmail.com",
    "cpf" => "13232323236",
    "idade" => 32
];

$cliente = new Cliente($mockCliente);

echo json_encode($cliente->imprimeDados());

/* 

var_dump($arrayTeste);exit;

echo phpinfo(); 

*/