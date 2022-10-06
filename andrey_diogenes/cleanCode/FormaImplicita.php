<?php

if (in_array(self::GRUPO_ADM, $grupoAcesso)) {
    return true;
}

return false;

//Bom
return in_array(self::GRUPO_ADM, $grupoAcesso);