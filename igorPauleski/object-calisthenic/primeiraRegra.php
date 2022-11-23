<?php

/*
* Um nível de indentacao por método
*/

class Cliente
{
    private int $codigoPromocao;

    public function buscaCodigoPromocao(string $nomePromocao)
    {
        // 1.
        if ($this->codigoPromocao) {
            // 2.
            if ($this->codigoPromocaoExpirou()) {
                // 3.
                if ($this->nomePromocao == $nomePromocao) {
                    return $this->codigoPromocao;
                } else {
                    throw new Exception('Promoção não existe mais');
                }
            } else {
                throw new Exception('Promoção Expirada');
            }      
        } else {
            throw new Exception('Cliente sem código de promoção');
        }
    }

    public function codigoPromocaoExpirou()
    {
        // codigo...

    }
}

class Cliente
{
    private int $codigoPromocao;
    private string $nomePromocao;

    public function buscaCodigoPromocao(string $nomePromocao) 
    {
        if ($this->nomePromocao) {
            return $this->validaCodigoPromocao($nomePromocao);
        } 
        throw new Exception('Cliente Sem cõdigo de promoção.');
    }

    public function validaCodigoPromocao(string $nomePromocao)
    {
        if ($this->codigoPromocaoExpirou()) {
            return $this->buscaPromocaoExistente($nomePromocao);
        }
        throw new Exception('Promocao Expirou');
    }

    public function buscaPromocaoExistente(string $nomePromocao)
    {
        if ($this->nomePromocao == $nomePromocao) {
            return $this->codigoPromocao;
        } 
        throw new Exception('Promoção não existe mais');
    }

    public function codigoPromocaoExpirou()
    {
        //codigo
    }
}