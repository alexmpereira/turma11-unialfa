<?php

use App\Atendimento\Domain\Entity\Atendimento;
use App\Cliente\Domain\Entity\Cliente;

require_once __DIR__."/../vendor/autoload.php";

$client = new Cliente('Julieser','Patrick','123.456.789.11','Gol','atr-578');

$atendimento = new Atendimento(

    $client->getName(), 
    $client->getLastName(),
    $client->getCpf(),
    $client->getVehicle(),
    $client->getLicensePlate(),
    'Substituição de Pneu',
    '11-11-2022',
    '200'

);



print_r($atendimento);
print_r($client);




