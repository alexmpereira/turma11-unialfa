<?php

if (in_array(self::ADMIN, $grupoacesso)) {
    return true;
}

return false;
