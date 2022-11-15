<?php

use App\Atendimento\Domain\Entity\Atendimento;
use App\Cliente\Domain\Entity\Cliente;

require_once __DIR__."/../vendor/autoload.php";

$client = new Cliente('Eduardo','Mota','065.845.998.67','Uno','placa-213');
$atendimento = new Atendimento(
    $client->getName(), 
    $client->getLastName(),
    $client->getCpf(),
    $client->getVehicle(),
    $client->getLicensePlate(),
    'Troca de amortecedores dianteiros',
    '20-07-2023',
    '1.000'
);
print_r($atendimento);
print_r($client);




