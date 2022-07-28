<?php

use Unialfa\Phpxdebug\Adapters\Client;

require_once __DIR__ . '/vendor/autoload.php';

$mockCliente = [
    "nome" => "Teste",
    "email" => "teste@gmail.com",
    "idade" => 32,
    "cpf" => "12345678910"
];
//$testdebug = JJ;


$cliente = new Client($mockCliente);

echo json_encode($cliente->imprimeDados());


//var_dump($mockCliente); exit;

// echo phpinfo();