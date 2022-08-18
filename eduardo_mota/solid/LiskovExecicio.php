<?php


interface Skillsveiculos
{
    public function acelerar();
    public function freiar();
    
}

interface SkillsveiculosAreos
{
    public function pegarVoo();
    public function pousar();
    public function acelerar();
    public function freiar();
}

abstract class Veiculo implements Skillsveiculos
{
    public function acelerar()
    {
        return 'o carro acelera';
    }
    public function freiar()
    {
        return 'o carro freia';
    }

}

abstract class Aeronave implements SkillsveiculosAreos
{
    public function acelerar()
    {
        return 'o carro acelera';
    }
    public function freiar()
    {
        return 'o carro freia';
    }
    
    public function pegarVoo()
    {
        return 'A aeronave decolar';
    }
    public function pousar()
    {
        return 'A aeronave pousa';
    }
}

abstract class TipoVeiculo 
{
   
}

class F15 extends Aeronave
{

}

class Corsa extends Veiculo
{

}

class Piloto 
{
    protected $veiculo;
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