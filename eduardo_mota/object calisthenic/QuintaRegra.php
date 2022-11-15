<?php



class Dog
{
    public function __construct(Breed $bredd)
    {
        $this->bredd = $bredd;
    }
}


class Breed
{
    public function __construct(string $color)
    {
        $this->color = $color;
    }

}

$orm->find()->where()->execute();


class DogCorreto
{
    public function  __construct(Breed $breed)
    {
        $this->breed=$breed;
    }

    public function breedColor()
    {
        
    }
}