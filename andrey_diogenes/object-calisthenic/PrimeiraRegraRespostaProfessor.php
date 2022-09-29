<?php

class Cliente
{
    private int $codigoPromocao;
    private string $nomePromocao;

    public function buscaCodigoPromocao(string $nomePromocao)
    {
        if ($this->nomePromocao) {
            return $this->validaCodigoPromocao($nomePromocao);
        } else {
            throw new Exception('Cliente sem código de promoção');
        }
    }

    public function validaCodigoPromocao(string $nomePromocao)
    {
        if ($this->codigoPromocaoExpirou()) {
            return $this->buscaPromocaoExistente($nomePromocao);
        } else {
            throw new Exception('Promoção Expirada');
        }
    }

    public function buscaPromocaoExistente(string $nomePromocao)
    {
        if ($this->nomePromocao == $nomePromocao) {
            return $this->codigoPromocao;
        } else {
            throw new Exception('Promoção não existe mais');
        }
    }

    public function codigoPromocaoExpirou()
    {
        //codigo...
    }
}