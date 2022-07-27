<?php

use Unialfa\Phpxdebug\Adapters\Client;

require_once __DIR__ . '/vendor/autoload.php';

$arrayTeste = [
    "Teste" => "aa"
];
//$testdebug = JJ;

$client = new Client();

echo $client->hello();


// var_dump($arrayTeste), exit;

// echo phpinfo();