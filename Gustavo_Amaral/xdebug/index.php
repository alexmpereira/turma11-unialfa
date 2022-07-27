<?php

use Unialfa\Phpxdebug\Adapters\Cliente;

require_once __DIR__ .'/vendor/autoload.php';

$arrayTeste = [
    "teste" => "aa"
];

$cliente = new Cliente();

echo $cliente->hello();


//echo phpinfo();