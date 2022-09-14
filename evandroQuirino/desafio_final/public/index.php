<?php

use App\Contabilidade\Domain\Entity\Cliente;

require_once __DIR__ . '/../vendor/autoload.php';

$cliente = new Cliente('Robson', 'Melo', 35, '123.456.789-00');

print_r($cliente);