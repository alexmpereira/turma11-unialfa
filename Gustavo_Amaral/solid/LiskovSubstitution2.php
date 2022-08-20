<?php 

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

    public function aterissagem()
    
    {
        return "Veiculo aterissando";
    }

    public function velocidadeDoSom()
    {
        return "Veiculo atingindo velocidade do som";
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

class Aviao extends VeiculoAereo
{

}

class Corsa extends VeiculoTerrestre
{

}

class Piloto 
{
    protected $veculo;
    public function __construct($veiculo)
    {
        $this->veiculo = $veiculo;
    }

    public function acelarCarro()
    {
        return $this->veiculo->acelerar();
    }
}

$aviao = new Aviao();
$corsa = new Corsa();
$piloto1 = new Piloto($corsa);
echo $piloto1->acelarCarro();