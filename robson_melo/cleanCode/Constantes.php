<?php
//deve ter uma constante no grupo de acesso

const GRUPO_ADMINISTRADORES = 10;
function deveExecutar()
{
    $grupoAcesso = explode(',', $_SESSION['GRUPOACESSO']);
    if(in_array(self::GRUPO_ADMINISTRADORES, $grupoAcesso)){
        return true;
    }
    return false;
}