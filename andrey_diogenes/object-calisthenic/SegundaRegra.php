<?php

/*
 * Não use a palavra-chave ELSE
*/

class Cliente
{
    private int $codigoPromocao;

    public function buscaCodigoPromocao(string $nomePromocao)
    {      
        if ($this->nomePromocao) {
            return $this->validaCodigoPromocao($nomePromocao);
        }
        throw new Exception('Cliente sem código de promoção');
    }

    public function validaCodigoPromocao(string $nomePromocao)
    {
        if ($this->codigoPromocao) {
            $this->codigoPromocaoExpirou($nomePromocao);              
        }
        throw new Exception('Promoção Expirada'); 
    }

    public function codigoPromocaoExpirou(string $nomePromocao)
    {
        if ($this->nomePromocao == $nomePromocao) {
            return $this->codigoPromocao;
        }
        throw new Exception('Promoção não existe mais');
    }
}