<?php

declare(strict_types=1);

namespace App\SingleResponsibilityWrong;

use Exception;
use PDO;
use SingleResponsibility\Connection;
use SingleResponsibility\ValidateUser;
use SingleResponsibility\SendEmail;

class SaveUser
{
  protected $conn;
  protected $phpmailer;
  protected $name;
  protected $cpf;
  protected $age;

  public function __construct(string $name, string $cpf, int $age)
  {
    $this->name = $name;
    $this->cpf = $cpf;
    $this->age = $age;

    $this->conn = Connection::connection();
    $user = new ValidateUser();
    $user = validateUser($this->name, $this->cpf, $this->age);
    $this->saveUser();
    #Envia o email
    $email = new SendEmail();
    $email->sendEmail();
  }


  private function saveUser()
  {
    // Realiza o insert no banco de dados
  }



}