<?php

namespace Unialfa\Phpxdebug\Domain;

use Exception;

class Carro
{
    public bool $ligado = false;

    public function liga()
    {
        //fast fail
        if($this->ligado) {
            throw new Exception("algo deu errado.");
        }

        $this->ligado = true;
        // if (!$this->ligado){
        //     $this->ligado = true;
        // } else {
        //     throw new Exception("Algo deu errado");
        // }
    }
}