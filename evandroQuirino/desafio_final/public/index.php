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

$carDTO = new CarDTO('Ford', 'Ka', 2011, 'Preto');
$clientDTO = new ClientDTO('Evandro', 'Quirino', '999.999.999-99', $carDTO);
$attedanceDTO = new AttedanceDTO($clientDTO, 'Troca de óleo', 200.00, '2022-11-06');

$attedanceAction = new AttedanceAction($attedanceDTO);
$attedance = $attedanceAction->action();

echo AttedancePresentable::present($attedance);
