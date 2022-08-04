<?php

use Unialfa\Phpxdebug\Adapters\Cliente;
use Unialfa\Phpxdebug\Domain\Endereco;

require_once __DIR__ . '/vendor/autoload.php';

$mockCliente = [
    "nome" => "Teste",
    "idade" => 32,
    "email" => "teste@gmail.com",
    "cpf" => "12345678910"
];

$mockEndereco = [
    "endereco" => "Rua Unialfa",
    "cidade" => "Umuarama",
    "numero" => 1004
];

$endereco = new Endereco($mockEndereco);
$cliente = new Cliente($mockCliente, $endereco);

echo json_encode($cliente->imprimeDados());

/*
$arrayTeste = [
    "Teste" => "aa"s
]

var_dump($arrayTeste);exit;

echo phpinfo();*/