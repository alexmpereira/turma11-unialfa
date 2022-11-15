<?php

use App\Cliente\Domain\Entity\Cliente;
use App\Atendimento\Domain\Entity\Atendimento;

require_once __DIR__ . '/../vendor/autoload.php';

$cliente = new Cliente('João', 'Silva', '123.456.789-10', 'Fiat', 'ABC-1234', '11 99999-9999');

$atendimento = new Atendimento($cliente->getNome(), $cliente->getSobrenome(), $cliente->getCpf(), $cliente->getVeiculo(), $cliente->getPlaca(), $cliente->getTelefone(), '2021-01-01', '10:00', 'Troca de óleo', 'R$ 100,00', 'Agendado', 'Trocar óleo e filtro');
// $atendimento = new Atendimento('João', 'Silva', '123.456.789-10', 'Fiat', 'ABC-1234', '11 99999-9999', '2021-01-01', '10:00', 'Troca de óleo', 'R$ 100,00', 'Agendado', 'Trocar óleo e filtro');

var_dump($cliente);
var_dump($atendimento);