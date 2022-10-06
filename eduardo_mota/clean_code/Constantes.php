<?php

const ADMIN = 10;

function deveExecutar()
{
    $grupoAcesso = explode(',', $_SESSION['GRUPOACESSO']);
    if (in_array(self::ADMIN, $grupoAcesso)) {
        return true;
    }
    return false;
}
