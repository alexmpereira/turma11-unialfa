<?php
//nome não pode ser vazio e nem nulo
if (!is_empty($nome) || !is_null($nome)) {

}

function validaNuloVazio()
{
    return !is_empty($nome) || !is_null($nome);
}
if (validaNuloVazio($nome)) {
    
}