<?php

use Unialfa\Phpxdebug\Adapters\Cliente;

require_once __DIR__ . '/vendor/autoload.php';

$mockCliente = [
    "nome" => "Teste",
    "idade" => 32,
    "email" => "teste@gmail.com",
    "cpf" => "12345678910"
];

$cliente = new Cliente($mockCliente);

echo json_encode($cliente->imprimeDados());

/*
$arrayTeste = [
    "Teste" => "aa"s
]

var_dump($arrayTeste);exit;

echo phpinfo();*/