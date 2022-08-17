<?php
class Mailer implements Email
{

    private $mail;

    public function __construct()
    {
        //instancia d library phpmailer
        //config do email 
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