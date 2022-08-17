<?php

declare(strict_types=1);

namespace App\SingleResponsibility\User;

use App\SingleResponsibility\Connection\Connection;
use App\SingleResponsibility\Email\Email;
use Exception;

class SaveUser
{
  protected $name;
  protected $email;
  protected $cpf;
  protected $age;

  public function __construct(string $name, string $email, string $cpf, int $age)
  {
    $this->name = $name;
    $this->email = $email;
    $this->cpf = $cpf;
    $this->age = $age;

    $this->validateUser();
    $this->saveUser();
    $this->connection = new Connection();
    $this->sendEmailUser = new Email();
    $this->sendEmailUser->sendEmail($email);
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