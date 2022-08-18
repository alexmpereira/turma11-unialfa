<?php

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

abstract class VeiculoAereo
{
    public function acelerar()
    {
        return "O aviao está acelerando";
    }

    public function freiar()
    {
        return "O aviao está parando";
    }

    public function aterrissar()
    {
        return "O aviao está aterissando";
    }

}

class Corsa extends VeiculoTerrestre
{

}

class AviaoF50 extends VeiculoAereo
{

}

class PilotoTerrestre
{
    protected $veiculoTerrestre;
    public function __construct(VeiculoTerrestre $veiculoTerrestre)
    {
        $this->veiculoTerrestre = $veiculoTerrestre;
    }
    

    public function acelarCarro()
    {
        return $this->veiculoTerrestre->acelerar();
    }
}

class PilotoAereo
{
    protected $veiculoAereo;
    public function __construct(VeiculoAereo $veiculoAereo)
    {
        $this->veiculoAereo = $veiculoAereo;
    }
    

    public function aterrissarVeiculoAereo()
    {
        return $this->veiculoAereo->aterrissar();
    }
}

$corsa = new Corsa();
$piloto1 = new PilotoTerrestre($corsa);
echo $piloto1->acelarCarro();

$aviao = new AviaoF50();
$piloto2 = new PilotoAereo($aviao);
echo $piloto2->aterrissarVeiculoAereo();