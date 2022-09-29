<?php
/*
 * Value Objects
 * Enrole todos os primitivos e cordas
*/

class Student
{
    private string $nome;
    private Email $email;

    public function __construc(string $nome, string $email)
    {
        $this->nome = $nome;
        $this->email = $email;
    }

    public function getEmail(): string{
        return $this->email;
    }
}

class Email
{
    private string $email;

    public function __construct(string $email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
            throw new InvalidArgumentException("E-mail invalido!");
        }

        $this->email = $email;
    }

    public function __toString()
    {
        return $this->email;
    }
}