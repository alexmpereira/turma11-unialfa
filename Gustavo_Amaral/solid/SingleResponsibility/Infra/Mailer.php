<?php

class Mailer implements Email
{

    public function __construct()
    {
        //Instancia d library PHPMailer
        //Config do email (host, username, password)
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