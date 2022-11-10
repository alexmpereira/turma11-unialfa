<?php

namespace Unialfa\Poo\Domain;

use DomainException;

class CPF
{
    private const CPF_REGEX = '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$/';

    private string $cpf;

    public function __construct(string $cpf)
    {
        if (!$this->isValid($cpf)) {
            throw new DomainException('Invalid CPF');
        }

        $this->cpf = $cpf;
    }

    private function isValid(string $cpf): bool
    {
        return preg_match(self::CPF_REGEX, $cpf);
    }

    public function __toString()
    {
        return $this->cpf;
    }
}
