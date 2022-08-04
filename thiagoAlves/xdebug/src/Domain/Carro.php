<?php 

namespace Unialfa\PhpXDebug\Domain;

class Carro
{
    protected bool $ligado;
    
    public function __construct()
    {
        $this->ligado = false;
    }
    
    public function ligar()
    {
        if(!$this->ligado) {
            echo "Carro já está ligado";
        } 
    }
    
    public function desligar()
    {
        $this->ligado = false;
    }
    
    public function getLigado()
    {
        return $this->ligado;
    }
}