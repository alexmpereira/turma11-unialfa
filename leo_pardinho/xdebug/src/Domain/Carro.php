<?php

namespace Unialfa\Phpxdebug\Domain;

use Exception;

class Carro
{
    public bool $ligado = false;

    public function ligar()
    {

        if ($this->ligado){
            throw new Exception("Algo deu errado.");
        }

        $this->ligado = true;
        
    }
}