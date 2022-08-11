<?php

declare(strict_types=1);

namespace App\SingleResponsibilityWrong;

use Exception;
use PDO;

Class validateUser
{
  protected $phpmailer;
  protected $name;
  protected $cpf;
  protected $age;

    public function __construct(string $name, string $cpf, int $age)
  {
    $this->name = $name;
    $this->cpf = $cpf;
    $this->age = $age;

    $this->validateUser();
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
}

class SaveUser
{
  public function __construct()
  {

    $this->saveUser();
  }

  private function saveUser()
  {
    // Realiza o insert no banco de dados
  }

}

Class sendEmail
{
  protected $email;
  protected $senha;

  public function __construct(string $email, string $senha)
  {
    $this->email = $email;
    $this->senha = $senha;

    $this->sendEmail();
  }
    private function sendEmail()
  {
    //envia o email
  }
}

Class connection
{
  protected $conn;
  protected $phpmailer;

    public function __construct()
  {
    $this->connection();
  }

  private function connection()
  {
    $this->conn = new PDO("mysql:host=127.0.0.1;post=3306;dbname=mainprojeto", 'root', 'root');
    $this->conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  }
}