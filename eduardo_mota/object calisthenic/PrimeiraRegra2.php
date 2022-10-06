

<?php

class Cliente{
    private int $promocao;
    private string $nomePromocao;

    public function buscarCodigo(string $nomePromocao){
        if ($this->nomePromocao) {
           return $this->buscaPromocaoExpirou($nomePromocao);
        } 
            throw new Exception('promocao Exprirou');
        
        
    }

    public function buscaPromocaoExistente(string $nomePromocao){
        if ($this->nomePromocao == $nomePromocao) {
            return $this->codigoPromocao;
        } 
            throw new Exception('promocao Nâo existe mais ');
        
        
    }

    public function buscaPromocaoExpirou(){
        //code
    }
}