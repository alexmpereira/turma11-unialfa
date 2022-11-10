<?php
//evitar deixar codigo comentado

//nome nao pode ser vazio ou nulo
// if(!is_empty($nome) || !is_null($nome))
// {
    
// }

function nomeNaoPodeSerVazioOuNulo($nome)
{
    return !empty($nome) || !is_null($nome);
}
if(nomeNaoPodeSerVazioOuNulo($nome))
{
    
}
