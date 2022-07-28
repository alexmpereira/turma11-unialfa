<?php

use UniaAlfa\Phpxdebug\Adapters\Cliente;

    require_once __DIR__ . '/vendor/autoload.php';

    $arrayTeste = [
        "Teste" => "aa",
    ];

    $cliente = new Cliente();

    echo $cliente->setNome("Alarcon");

    

    // var_dump($arrayTeste);exit;
    // echo phpinfo();