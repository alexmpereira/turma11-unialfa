<?php

namespace App\Contabilidade\Domain\Entity;

final class Boletos
{
    private string $nome;
    private float $valor;
    private string $data;
    private string $vencimento;
    private Cliente $cliente;
    



    public function __construct(string $nome, float $valor,string $data,string $vencimento,Cliente $cliente)
    {
        $this->setNome($nome);
        $this->setValor($valor);
        $this->setData($data);
        $this->setVencimento($vencimento);
       

        
    }

    public function  alertaVencimento(string $data, string $vencimento,Cliente $cliente){
        if($data == $vencimento){
           $alerta = "o ".$cliente->getNome()." não pode comprar pois ta endividado";
        }

        return $alerta;
        
    }


    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function setValor($valor){
        $this->valor = $valor;
        return $this;
    }
    public function setData($data){
        $this->$data = $data;
        return $this;
    }

    public function setVencimento($vencimento){
        $this->$vencimento = $vencimento;
        return $this;
    }
    
}