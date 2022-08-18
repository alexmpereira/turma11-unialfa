<?php

interface HbilidadeDeVoar
{
    public function voar();
}

class Passaro
{
    
}

class Pombo extends Passaro implements HbilidadeDeVoar
{
    public function voar()
    {
        
    }
    
}


class Avestrus extends Passaro
{

}

