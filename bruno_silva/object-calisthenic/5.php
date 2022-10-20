<?php


// Method Chainging: https://nandovieira.com.br/method-chaining-e-estilo-de-codigo
// DSL: https://pt.wikipedia.org/wiki/Linguagem_de_dom%C3%ADnio_espec%C3%ADfico 
class Dog
{
    public function __construct(Breed $breed)
    {
        $this->breed = $breed;
    }
}

class Breed
{

    public function __construct(string $color)
    {
        $this->color = $color;
    }
}


class DogCorreto {
    public function __construct(Breed $breed)
    {
        $this->breed = $breed;
    }
    
    public function breedColor()
    {
        return $this->breed;
    }
}
