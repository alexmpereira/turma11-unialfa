<?php

class Mailer implements Email
{
    private $mail;

    public function __construct()
    {
        //Instancia d library PHPMailer
        //Configurações de envio de email
    }

    public function sendEmail(
        string $assunto,
        string $conteudo,
        array $destinatario,
        array $copiaPara = []
    ): bool
    {
        //Envia o email
        return true;
    }
}