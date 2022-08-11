<?php

declare(strict_types=1);

namespace App\SingleResponsibilityWrong;

use Exception;
use PDO;

class Email
{
  protected $phpmailer;

  public function __construct(string $phpmailer)
  {
    $this->phpmailer = $phpmailer;
    $this->sendEmail();
  }

  private function sendEmail()
  {
    //envia o email
  }
}