<?php

use UniaAlfa\Phpxdebug\Adapters\Cliente;

    require_once __DIR__ . '/vendor/autoload.php';

    $mockCliente = [
        'nome' => 'Pedro',
        'idade' => '20',
        'email' => 'pedrohenriquealarcon@gmail.com',
        'cpf' => '12345678910',
    ];

    $cliente = new Cliente($mockCliente);

    echo $cliente->imprimeDadosCliente();

    

    // var_dump($arrayTeste);exit;
    // echo phpinfo();