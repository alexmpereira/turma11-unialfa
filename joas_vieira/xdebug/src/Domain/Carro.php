<?php

namespace Unialfa\PhpXDebug\Domain;

use Exception;

class Carro
{
    public bool $ligado = false;

    public function ligar()
    {
        // if(!$this->ligado) {
        //     $this->ligado = true;
        // } else {
        //     throw new Exception('Carro já está ligado');
        // }

        if($this->ligado) {
            throw new Exception('Carro já está ligado');
        }

        $this->ligado = true;
    }
}