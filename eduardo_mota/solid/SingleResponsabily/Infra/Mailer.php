<?php


class Mailer implements Email
{
    private $mail;

    public function __construct()
    {
        //instancia a library phpMailer
        //config do email (host, userName, password)
    }

    public function sendEmail(string $assunto, string $conteudo, array $destinatario, array $copiaPara = []): bool
    {
        return true;
    }
}