<?php

declare(strict_types=1);

namespace App\SingleResponsibility;

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

    $this->saveUser();   
  }

  private function saveUser()
  {
    // Realiza o insert no banco de dados
  }
}