<?php 

abstract class Veiculo
{
    public function acelerar()
    {
        return "O carro está acelerando";
    }

    public function freiar()
    {
        return "O carro está parando";
    }

}

class Corsa extends Veiculo
{

}

class Piloto 
{
    protected $veiculo;
    public function __construct(Veiculo $veiculo)
    {
        $this->veiculo = $veiculo;
    }

    public function acelarCarro()
    {
        return $this->veiculo->acelerar();
    }
}

$corsa = new Corsa();
$piloto1 = new Piloto($corsa);
echo $piloto1->acelarCarro();

//Solution to the problem Liskov Substitution Car 
abstract class Veiculo
{
    public function acelerar()
    {
        return "O carro está acelerando";
    }

    public function freiar()
    {
        return "O carro está parando";
    }
}

class Carro extends Veiculo
{
    public function acelerar()
    {
        return "O carro está acelerando mais";
    }
}

class Piloto 
{
    protected $veiculo;
    public function __construct(Veiculo $veiculo)
    {
        $this->veiculo = $veiculo;
    }

    public function acelarCarro()
    {
        return $this->veiculo->acelerar();
    }
}

