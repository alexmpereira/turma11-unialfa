<?

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

$corsa = new Corsa();
$piloto1 = new Piloto($corsa);
echo $piloto1->acelarCarro();