<?php

declare(strict_types=1);

namespace App\SingleResponsibility;

use Exception;
use PDO;

class User
{
    protected $name;
    protected $cpf;
    protected $age;

    public function saveUser()
    {
        $conn = new Connection();
        
        $this->validateUser();
        // Realiza o insert no banco de dados
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
