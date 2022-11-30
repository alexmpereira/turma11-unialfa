<?php

use App\Atendimento\Domain\Entity\Atendimento;
use App\Cliente\Domain\Entity\Cliente;

require_once __DIR__."/../vendor/autoload.php";

$client = new Cliente('Gustavo', 'Cianci', '090.243.231.57', 'Civic', '231');

$atendimento = new Atendimento(
    
    $client->getNome(), 
    $client->getUltimoNome(),
    $client->getCpf(),
    $client->getVehicle(),
    $client->getLicensePlate(),
    'Trocar pneus desgastados',
    '02-12-2022',
    '1.300'
);
print_r($atendimento);
print_r($client);




