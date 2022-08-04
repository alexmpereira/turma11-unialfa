<?php

use Unialfa\Phpxdebug\Adapters\Cliente;
use Unialfa\Phpxdebug\Domain\Endereco;

require_once __DIR__.'/vendor/autoload.php';

$mockCliente = [
    "nome"=>"teste",
    "email"=>"teste@gmail.com",
    "idade"=>32,
    "cpf"=>"123456",
];

$mockEndereco = [
    "endereco" => "Rua Unialfa",
    "cidade" => "Umuarama",
    "numero" => "1004"
];

$endereco = new Endereco($mockEndereco);
$cliente = new Cliente($mockCliente, $endereco);

echo json_encode($cliente->imprimirDados());

