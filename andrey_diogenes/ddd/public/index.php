<?php

use App\Contabilidade\Domain\Entity\Cliente;

    require_once __DIR__ . '/../vendor/autoload.php';

    echo "Olá Mundo";
    
$cliente = new Cliente(
    "Aluno",
    "Andrey",
    21,
    "12345678900"
);