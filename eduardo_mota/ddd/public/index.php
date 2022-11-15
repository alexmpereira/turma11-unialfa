<?php

use App\Contabilidade\Domain\Entity\Boletos;
use App\Models\Client;

require_once __DIR__."/../vendor/autoload.php";

echo "hello world";
$leo = new Client(
"l~eo",
"pardinho",
12,
"5465456456"

);

$boleto = new Boletos(
 "boleto de strams",
 555,
 "12*12",
 "12*12",
 $cliente
);

$boleto->alertaVencimento("12","12",$cliente);
