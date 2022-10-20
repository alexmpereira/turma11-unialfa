<?php

use App\Contabilidade\Domain\Entity\Cliente;

require_once __DIR__ . '/../vendor/autoload.php';

$cliente = new Cliente(
    'Bruno',
    'Guimaraes',
    20,
    '10805551964',
);