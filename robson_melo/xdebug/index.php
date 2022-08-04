<?php

use Unialfa\Phpxdebug\Adapters\Client;
use Unialfa\Phpxdebug\Domain\Endereco;
use Unialfa\Phpxdebug\Domain\Pagamento;

require_once __DIR__ . '/vendor/autoload.php';

$mockCliente = [
    "nome" => "Teste",
    "email" => "teste@gmail.com",
    "idade" => 32,
    "cpf" => "12345678910"
];

$mockEndereco = [
    "endereco"=> "Rua Unialfa",
    "cidade" => "Umuarama",
    "numero" => 1004
];

$mockPagamento = [
    "tipoPagamento"=> "Cartão de Credito"
];


$endereco= new Endereco($mockEndereco);
$pagamento= new Pagamento($mockPagamento);
$cliente = new Client($mockCliente, $endereco, $pagamento);

echo json_encode($cliente->imprimeDados());


//var_dump($mockCliente); exit;

// echo phpinfo();