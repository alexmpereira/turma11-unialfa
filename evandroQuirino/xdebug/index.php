<?php 
// ini_set('display_errors', 1);

use Unialfa\PhpXDebug\Adapters\Cliente;
use Unialfa\PhpXDebug\Domain\Endereco;


require_once __DIR__ . '/vendor/autoload.php';


$mockCliente = [
    "nome" => "João",
    "idade" => 31,    
    "email" => "teste@gmail.com",
    "cpf" => "123456789"
];

$mockEndereco = [
    "endereco" => "Rua Unialfa",
    "cidade" => "Umuarama",
    "numero" => 6655
];


$endereco = new Endereco($mockEndereco);
$cliente = new Cliente($mockCliente, $endereco);

echo json_encode($cliente->imprimeDados());


// var_dump($arrayTeste);exit;

// echo phpinfo();