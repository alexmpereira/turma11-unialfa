<?php 
// ini_set('display_errors', 1);

use Unialfa\PhpXDebug\Adapters\Cliente;

require_once __DIR__ . '/vendor/autoload.php';


$mockCliente = [
    "nome" => "João",
    "email" => "teste@gmail.com",
    "idade" => "20",
    "cpf" => "123456789"
];



$cliente = new Cliente($mockCliente);

echo json_encode($cliente->imprimeDados());


// var_dump($arrayTeste);exit;

// echo phpinfo();