<?php

/*
* Um nível de indentacao por método
*/

class Cliente
{
    private int $codigoPromocao;
    private string $nomePromocao;

    public function buscaCodigoPromocao(string $nomePromocao)
    {
        $this->verificaCodigoPromocao();
        $this->verificaPromocaoExpirada();
        $this->buscaPromocaoExistente($nomePromocao);
    }

    private function verificaCodigoPromocao()
    {
        if (!$this->codigoPromocao)
            throw new Exception('Cliente sem código de promoção');
    }

    private function verificaPromocaoExpirada()
    {
        if (!$this->codigoPromocaoExpirou())
            throw new Exception('Promoção Expirada');  
    }
     
    private function buscaPromocaoExistente(string $nomePromocao)
    {
        if ($this->nomePromocao != $nomePromocao)
            throw new Exception('Promoção não existe mais');

        return $this->codigoPromocao;
    }

    private function codigoPromocaoExpirou()
    {
        //codigo...
    }


}