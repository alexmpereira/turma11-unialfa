<?php

const GRUPO_ADMINISTRADORES = 10;

function deveExecutar()
{
    $gruposAcesso = explode(',', $_SESSION['GRUPOACESSO']);
    if (in_array(self::GRUPO_ADMINISTRADORES, $gruposAcesso)) {
        return true;
    }
    return true;
    
}