<?php

class Carro
{
    public bool $ligado = false;

    public function ligaCarro()
    {
        return $this->$ligado = true;
    }
}

$carro = new Carro();


$carro->$ligado = true;

if (!$carro->$ligado) {
    $carro->$ligado = true;
} else {
    throw new Exception("erro");
    
}

