<?php

interface Email
{
    public function send(string $to, string $subject, string $body): bool;
}
