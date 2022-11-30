<?php
namespace App\SingleResponsibilityWrong\Connection;
use FFI\Exception;


class Midleware
{
    private function validateUser()
    {
        if (strlen($this->name) < 10) {
            throw new Exception('Quantidade de caracteres mínimas é de dez');
        }

        if ($this->age < 18) {
            throw new Exception('Precisa ser maior de 18 anos');
        }

        return;
    }
}