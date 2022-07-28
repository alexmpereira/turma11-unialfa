<?php

use Unialfa\Phpxdebug\Adapters\Cliente;

require_once __DIR__ . '/vendor/autoload.php';

$arrayTeste = [
    "Teste" => "aa"
];

$cliente = new Cliente();

echo $cliente->hello();

/* 

var_dump($arrayTeste);exit;

echo phpinfo(); */