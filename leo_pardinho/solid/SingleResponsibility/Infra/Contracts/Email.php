<?php

interface Email
{
    public function sendEmail(

        string $assunto,
        string $conteudo,
        array $destinatario,
        array $copiaPara = []
        
    ): bool;
    
}