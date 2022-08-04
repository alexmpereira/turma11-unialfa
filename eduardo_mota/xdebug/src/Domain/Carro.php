<?php

namespace Unialfa\Phpxdebug\Domain;

use Exception;

class Carro
{
    public bool $ligado = false;


    public function ligarCarro()
    {

        if ($this->ligado) {
            throw new Exception("algo nao esta bem");
        }

        $this->ligado = true;
        // if (!$this->ligado) {
        //     $this->ligadoc= true;
        // }else{
        //     throw new Exception("Algo deu errado");

        // }
    }
}
