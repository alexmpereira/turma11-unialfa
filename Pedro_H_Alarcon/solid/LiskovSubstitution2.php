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
        return "O veiculo está acelerando";
    }

    public function freiar()
    {
        return "O veiculo está parando";
    }
    public function aterrisar()
    {
        return "O veiculo está aterrisando";
    }

}

class Corsa extends VeiculoTerrestre
{

}

class F15 extends VeiculoAereo
{

}



class Piloto 
{
    protected $veiculo;
    public function __construct(VeiculoTerrestre $veiculo)
    {
        $this->veiculo = $veiculo;
    }

    public function acelerarVeiculo()
    {
        return $this->veiculo->acelerar();
    }
}

class PilotoAviao
{
    protected $veiculo_aereo;
    public function __construct(VeiculoAereo $veiculo_aereo)
    {
        $this->veiculo_aereo = $veiculo_aereo;
    }

    public function aterrisarAviao()
    {
        return $this->veiculo_aereo->aterrisar();
    }
}

$corsa = new Corsa();
$piloto1 = new Piloto($corsa);
echo $piloto1->acelerarVeiculo();

//metodo usando a classe Aerea
$f15 = new F15();
$piloto_aviao = new PilotoAviao($f15);
echo $piloto_aviao->aterrisarAviao();