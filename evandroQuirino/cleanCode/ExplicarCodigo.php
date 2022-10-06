<?php

//nome não pode ser vazio e nem nulo
if(!is_empty($nome) || !is_null($nome)) {
    
}

//bom

function nomeNaoPodeSerVazioNemNulo($nome) 
{
    return !is_empty($nome) || !is_null($nome);
}

if(!nomeNaoPodeSerVazioNemNulo($nome)) {
    
}

