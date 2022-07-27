<?php

use Unialfa\Phpxdebug\Adapters\Cliente;

require_once __DIR__ .'/vendor/autoload.php';

$cliente = new Cliente();

echo $cliente->hello();

//  $arrayTeste = [
//     "Teste" => "aa"s
//  ];

// var_dump($arrayTeste);
// exit;

// echo phpinfo();