<?php

declare(strict_types=1);

namespace App\SingleResponsibilityWrong;


use App\SingleResponsibility\Connection;
use App\SingleResponsibility\User;
use App\SingleResponsibility\Email;

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

        new Connection();
        new User();
        new Email();
    }
}
