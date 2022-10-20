<?php

/**
 * Method Chaining: https://
 */

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

echo $dog->breed->color;

//$orm->find()->where()->execute();

class DogCorreto
{
    public function __construct(Breed $breed)
    {
        $this->breed = $breed;
    }

    public funtion breedColor()
    {
        return $this->breed->color;
    }
}