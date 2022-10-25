<?php

const GRUPO_DE_ADMINISTRADORES = 10;

function deveExecutar() 
{
    $gruposAcesso = explode(',', $_SESSION['GRUPOACESSO']);
    if (in_array(self::GRUPO_DE_ADMINISTRADORES, $gruposAcesso)) {
        return true;
    }
    return false;
}