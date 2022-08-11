<?php

namespace App\SingleResponsibilityWrong;

use Exception;

class validate
{
    public function validateUser($user)
  {
    if (strlen($user->name) < 10) {
      throw new Exception('Quantidade de caracteres mínimas é de dez');
    }

    if ($user->age < 18) {
      throw new Exception('Precisa ser maior de 18 anos');
    }

    return;
  }

}