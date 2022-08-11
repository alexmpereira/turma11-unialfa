<?php

class Mailer implements Email
{
    private $mail;

    public function __construct()
    {
        // Library to send emails
    }

    public function send(string $to, string $subject, string $body): bool
    {
        return true;
    }
}