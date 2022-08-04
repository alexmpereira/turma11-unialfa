<?php

namespace Unialfa\PhpXDebug\Domain;

use Exception;

class Carro
{
    public bool $ligado = false;

    public function liga()
    {
        //Fast Fail
        if($this->ligado){
            throw new Exception("Algo deu errado");
        }

        $this->ligado = true;
        // if (!$this->ligado) {
        //     $this->ligado = true;
        // } else {
        //     throw new Exception("Algo deu errado");
        // }
    }
}