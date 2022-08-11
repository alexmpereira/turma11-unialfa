<?php

declare(strict_types=1);

namespace App\SingleResponsibility;

class EmailSender
{
  
  protected $phpmailer;
  

  public function __construct()
  {   
    $this->sendEmail();
  }

  
  private function sendEmail()
  {
    //envia o email
  }

  
}