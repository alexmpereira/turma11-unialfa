<?php 

interface MailerInterface
{
    public function sendEmail(
        string $assunto,
        string $conteudo,
        array $destinatario,
        array $copiarPara = []
    ): bool;
}