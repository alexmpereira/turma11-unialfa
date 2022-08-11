<?php

class Mailer implements Email
{
    private $email;

    public function __construct()
    {
        //instancia a library PHPMailer

        //config do email( host, username, pass)
    
    }
    
    public function sendEmail(
        string $assunto, 
        string $conteudo,
        array $destinatario, 
        array $copiaPara = []
    ) : bool
    {
        return true;
    }
}