<?php

//Tell, don´t ask


use Unialfa\Phpxdebug\Domain\Carro;

require_once __DIR__ . '/vendor/autoload.php';

$carro = new Carro();
$carro->liga();



// class Carro
// {
//     public bool $ligado = false;
// }

// $carro = new Carro();
// if (!$carro->ligado){
//     $carro->ligado = true;
// } else {
//     throw new Exception("Algo deu errado");
// }

//print_r($carro);