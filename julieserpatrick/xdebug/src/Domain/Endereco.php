<?php 

namespace Unialfa\Phpxdebug\Domain;

class Endereco 
{
    protected string $cidade;
    protected string $endereco;
    protected string $numero;

    public function __contruct(array $endereco)
    {
        $this->cidade = $endereco['cidade'];
        $this->endereco = $endereco['endereco'];
        $this->numero = $endereco['numero'];
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function imprimeEndereco()
    {
        return [
            "cidade" => $this->cidade,
            "endereco" => $this->endereco,
            "numero" => $this->numero
        ];
    }
}