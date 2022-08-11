<?php

declare(strict_types=1);

namespace App\SingleResponsibilityWrong;

use App\SingleResponsibility\Connect as con;
use Exception;
use PDO;


class SaveUser
{
   
    // protected $name;
    // protected $cpf;
    // protected $age;

    public function __construct(string $name, string $cpf, int $age)
    {
        $this->name = $name;
        $this->cpf = $cpf;
        $this->age = $age;

       
        $this->coon->connection();
        $this->validateUser();
        $this->saveUser();
        $this->sendEmail();
    }
}
  

   

   
