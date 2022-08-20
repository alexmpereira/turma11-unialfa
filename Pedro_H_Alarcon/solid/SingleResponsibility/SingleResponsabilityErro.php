<?php

declare(strict_types=1);

namespace App\SingleResponsibilityWrong;

use Exception;

class SaveUser
{
  protected $name;
  protected $cpf;
  protected $age;

  public function __construct(string $name, string $cpf, int $age)
  {
    $this->name = $name;
    $this->cpf = $cpf;
    $this->age = $age;

    $this->validateUser();
    $this->saveUser();
  }

  private function validateUser()
  {
    if (strlen($this->name) < 10) {
      throw new Exception('Quantidade de caracteres mínimas é de dez');
    }

    if ($this->age < 18) {
      throw new Exception('Precisa ser maior de 18 anos');
    }

    return;
  }

  private function saveUser()
  {
    // Realiza o insert no banco de dados
  }

}