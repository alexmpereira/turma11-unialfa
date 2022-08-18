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
    public function aterrissar()
    {
        return "O veiculo está aterrissando";
    }
}

class Corsa extends VeiculoTerrestre
{

}

class F150 extends veiculoAereo
{

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
        return $this->veiculo->acelerar();
    }
}

$corsa = new Corsa();
$piloto1 = new Piloto($corsa);
echo $piloto1->acelarCarro();