<?php

interface AeroManobras
{
    public function voar();

    public function pousar();
}

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

abstract class VeiculoAereo
{
    public function acelerar()
    {
        return "O carro está acelerando";
    }

    public function freiar()
    {
        return "O carro está parando";
    }

    public function Voar()
    {
        return "O veiculo está voando";
    }

    public function Pousar()
    {
        return "O veiculo está descendo";
    }

}

class Corsa extends Veiculo 
{

}

class Jato extends Veiculo implements AeroManobras
{
    public function voar(){

    }
    public function pousar(){

    }
}

class Piloto 
{
    protected $veculo;
    public function __construct(Veiculo $veiculo)
    {
        $this->veiculo = $veiculo;
    }

    public function acelarCarro()
    {
        return $this->veiculo->acelarCarro();
    }

    public function acelarJato()
    {
        return $this->veiculo->voar();
    }
}

$corsa = new Corsa();
$piloto1 = new Piloto($corsa);
echo $piloto1->acelarCarro();