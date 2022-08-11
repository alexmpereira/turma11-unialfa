<?php

declare(strict_types=1);

namespace App\SingleResponsibility;

use Exception;
use PDO;

class Email
{ 
    public function __construct()
    {
      $this->sendEmail();
    }

    private function sendEmail()
    {
        //envia o email
    }
}





