<?php

use App\SingleResponsibility\Email;

class Mailer implements Email
{
    private $mail;
    public function __construct()
    {
        //instancia a library, PHPMailer
        //config do email (host, username, password)
    }
    public function sendEmail(
        string $assunto,
        string $conteudo,
        array $destinatario,
        array $copiaPara = []
    ): bool
}