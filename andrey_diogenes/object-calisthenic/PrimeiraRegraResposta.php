<?php

/*
 * Um nível de indentacao por método
*/

class Cliente
{
    private int $codigoPromocao;

    /* Método faz a busca do código */
    public function buscaCodigoPromocao(string $nomePromocao)
    {      
        /* Se encontrar o código, busca se o codigo tem promocao */
        if ($this->nomePromocao) {
            return $this->validaCodigoPromocao($nomePromocao);
        } 
        /* Se não, emite um erro */
        else {
            throw new Exception('Cliente sem código de promoção');
        }
    }

    /* Método que valida a promoção */
    public function validaCodigoPromocao(string $nomePromocao)
    {
        /* Se o codigo ainda for valido verifica se tem promoções ativas */
        if ($this->codigoPromocao) {
            $this->codigoPromocaoExpirou($nomePromocao);              
        }
        /* Se o código estiver expirado emite o erro */
        else {
            throw new Exception('Promoção Expirada'); 
        }
    }

    /* Método verifica se a promoção ainda exite */
    public function codigoPromocaoExpirou(string $nomePromocao)
    {
        /* Se ainda existir promoções para o código, retorna a promoção */
        if ($this->nomePromocao == $nomePromocao) {
            return $this->codigoPromocao;
        } 
        /* Se não existir emite o erro */
        else {
            throw new Exception('Promoção não existe mais');
        }
    }
}