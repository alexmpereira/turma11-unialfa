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

$mockEndereco = [
    "endereco" => "Rua Teste",
    "numero" => "123",
    "cidade" => "Teste"
];

$endereco = new Endereco($mockEndereco);
$cliente = new Cliente($mockCliente, $endereco);

echo json_encode($cliente->imprimeDados());


// var_dump($arrayTeste);exit;

// echo phpinfo();