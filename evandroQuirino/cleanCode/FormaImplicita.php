<?php

if (in_array(self::GRUPO_ADM, $gruposAcesso)) {
    return true;
}

return false;

// bom

return in_array(self::GRUPO_ADM, $gruposAcesso);