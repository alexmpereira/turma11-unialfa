<?php

class Mailer implements Email
{
    private $mail;
    public function __construct()
    {
        //Intancia da library PHPMailer
        //Config do email(host,username,password)
    }
    public function sendEmail(
        string $assunto,
        string $conteudo, 
        array $destinatario, 
        array $copiaPara = []
        ): bool
    {
        return true;
    }
}