<?php

interface HabilidadeDeVoar
{
    public function voar();
}

class Passaro 
{
   
}

class Pombo extends Passaro implements HabilidadeDeVoar
{
    public function voar()
    {

    }
}

class Avestruz extends Passaro
{

}

