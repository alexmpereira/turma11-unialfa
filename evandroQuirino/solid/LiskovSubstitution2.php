<?php

abstract class VeiculoAereo
{
    public function voar()
    {
    }
    public function aterrisar()
    {
    }
    public function acelerar()
    {
    }

    public function freiar()
    {
    }
}

abstract class VeiculoTerrestre
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

class Corsa extends VeiculoTerrestre
{

}

class F15 extends VeiculoAereo
{
    public function voar()
    {
        return "O F15 está voando na velocidade do som";
    }
}

class Piloto 
{
    protected $veiculo;
    public function __construct(VeiculoAereo $veiculo)
    {
        $this->veiculo = $veiculo;
    }

    public function acelar()
    {
        return $this->veiculo->voar();
    }
}

$F15 = new F15();
$piloto1 = new Piloto($F15);
echo $piloto1->acelar();