<?php

declare(strict_types=1);

namespace App\SingleResponsibilityWrong;

use Exception;
use PDO;

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

    $this->connection();
    $this->validateUser();
    $this->saveUser();
    $this->sendEmail();
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

  private function sendEmail()
  {
    //envia o email
  }

  private function connection()
  {
    $this->conn = new PDO("mysql:host=127.0.0.1;post=3306;dbname=mainprojeto", 'root', 'root');
    $this->conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  }
}