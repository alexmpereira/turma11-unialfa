<?php
//echo phpinfo(); exit;
use Unialfa\Phpxdebug\Adapters\Cliente;
use Unialfa\Phpxdebug\Domain\Endereco;

require_once __DIR__ . '/vendor/autoload.php';

$mockCliente = [
    "nome" => "Teste",
    "email" => "teste@gmail.com",
    "cpf" => "13232323236",
    "idade" => 32
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

var_dump($arrayTeste);exit;

echo phpinfo(); 

*/