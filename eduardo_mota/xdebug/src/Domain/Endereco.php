<?php

namespace Unialfa\Phpxdebug\Domain;


class Endereco
{
    protected string $cidade;
    protected string $endereco;
    protected int $numero;


    public function __construct(array $endereco)
    {
        $this->setCidade($endereco["cidade"]);
        $this->setEndereco($endereco["endereco"]);
        $this->setNumero($endereco["numero"]);
    }

    public function imprimiEndereco():array
    {
    
        return[
            "cidade"=> $this->cidade,
            "endereco"=> $this->endereco,
            "numero"=> $this->numero
        ];
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
        return $this;
    }

    public function setEndereco($endereco)
    {
        $this->$endereco = $endereco;
        return $this;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
        return $this;
    }
}
