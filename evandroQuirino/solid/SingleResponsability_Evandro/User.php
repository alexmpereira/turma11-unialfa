<?php

declare(strict_types=1);

namespace App\SingleResponsibilityWrong;


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

  }

  public static function save()
    {
        //salva o usuário
    }

}