<?php 

interface HabilidadedeVoar
{
    public function voar();
}



class Passaro
{
    
}

class Pombo extends Passaro implements HabilidadedeVoar
{
    public function voar()
    {
        return 'voando como pombo';
    }
}

class Aveztruz extends Passaro
{

}