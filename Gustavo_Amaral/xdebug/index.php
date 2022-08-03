<?php

use Unialfa\Phpxdebug\Adapters\Cliente;
use Unialfa\Phpxdebug\Domain\Endereco;

require_once __DIR__ . '/vendor/autoload.php';

$mockCliente = [
    "nome"  => "teste",
    "idade" => 32,
    "email" => "teste@gmail.com",
    "cpf"   => "12345678910"

];

$mockEndereco = [
    "endereco" => "Rua unialfa",
    "cidade"   => "Umuarama",
    "numero"   => 1004
];

$endereco = new Endereco($mockEndereco);
$cliente = new Cliente($mockCliente, $endereco);

echo json_encode($cliente->imprimeDados());


//echo phpinfo();