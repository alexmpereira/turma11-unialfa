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
        $this->codigoPromocaoExiste();
        $this->codigoPromocaoExpirou();
        $this->nomePromocaoCompativel($nomePromocao);

        return $this->codigoPromocao;
    }

    private function codigoPromocaoExpirou()
    {
        throw new Exception('Promoção Expirada');
    }

    private function codigoPromocaoExiste()
    {
        if (!$this->codigoPromocao) {
            throw new Exception('Cliente sem código de promoção');
        };
    }

    private function nomePromocaoCompativel(string $nomePromocao)
    {
        if ($this->nomePromocao != $nomePromocao) {
            throw new Exception('Promoção não existe mais');
        };
    }
}
