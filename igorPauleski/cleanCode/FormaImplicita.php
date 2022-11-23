<?php

if (in_array(self::GRUPO_ADM, $grupoAcesso)) {
    return true;
}
return false;

//metodo certo
return in_array(self::GRUPO_ADM, $grupoAcesso);