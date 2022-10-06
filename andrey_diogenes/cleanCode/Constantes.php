<?php

function deveExecutar ()
{
    $gruposAcesso = explode(',', $_SESSION['GRUPOACESSO']);
    if (in_array(10, $gruposAcesso)) {
        return true;
    }
    return false;
}

//Bom
const GRUPO_ADMINISTRADORES = 10;
function deveExecutarResposta ()
{
    $gruposAcesso = explode(',', $_SESSION['GRUPOACESSO']);
    $administrador = 10;
    if (in_array(self::GRUPO_ADMINISTRADORES, $gruposAcesso)) {
        return true;
    }
    return false;
}