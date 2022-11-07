<?php

if (in_array(self::GRUPO_ADMIN, $grupoAcesso)) {
    return true;
}
return false;

//bom modo de fazer
return in_array(self::GRUPO_ADMIN, $grupoAcesso);