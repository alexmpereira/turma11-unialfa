<?php

abstract class VeiculoTerrestre
{
    public function acelerar()
    {
        return "O veiculo está acelerando";
    }

    public function freiar()
    {
        return "O veiculo está parando";
    }

}

abstract class VeiculoAereo
{
    public function acelerar()
    {
        return "O veiculo está acelerando";
    }

    public function freiar()
    {
        return "O veiculo está parando";
    }

    public function decolar()
    {
        return "O veiculo está decolando";
    }

    public function aterrissar()
    {
        return "O veiculo está parando";
    }
}

class Corsa extends VeiculoTerrestre
{

}

class F15 extends VeiculoAereo
{

}

class PilotoTerrestre
{
    protected $veiculo;
    public function __construct(VeiculoTerrestre $veiculo)
    {
        $this->veiculo = $veiculo;
    }

    public function acelarVeiculo()
    {
        return $this->veiculo->acelerar();
    }
}

class PilotoAereo
{
    protected $veiculo;
    public function __construct(VeiculoAereo $veiculo)
    {
        $this->veiculo = $veiculo;
    }

    public function acelarVeiculo()
    {
        return $this->veiculo->acelerar();
    }

    public function decolarVeiculo()
    {
        return $this->veiculo->decolar();
    }
}

$corsa = new Corsa();
$piloto1 = new Piloto($corsa);
echo $piloto1->acelarCarro();