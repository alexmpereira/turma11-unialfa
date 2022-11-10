<?php

use Unialfa\Poo\Application\AttedanceAction;
use Unialfa\Poo\Infra\Dtos\AttedanceDTO;
use Unialfa\Poo\Infra\Dtos\CarDTO;
use Unialfa\Poo\Infra\Dtos\ClientDTO;
use Unialfa\Poo\Infra\Presenters\AttedancePresentable;

require_once __DIR__ . '/../vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$carDTO = new CarDTO('Fiat', 'Uno', 2010, 'Preto');
$clientDTO = new ClientDTO('João', 'Silva', '123.456.789-01', $carDTO);
$attedanceDTO = new AttedanceDTO($clientDTO, 'Troca de óleo', 100.00, '2021-01-01');

$attedanceAction = new AttedanceAction($attedanceDTO);
$attedance = $attedanceAction->action();

echo AttedancePresentable::present($attedance);
