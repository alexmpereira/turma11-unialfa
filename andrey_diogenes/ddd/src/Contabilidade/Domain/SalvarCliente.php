<?php

declare(strict_types=1);

namespace App\Contabilidade\Domain\Entity\SalvarCliente;

use Exception;
use PDO;

class SalvarCliente
{
    protected $nome;
    protected $sobrenome;
    protected $idade;
    protected $cpf;  

    public function __construct(string $nome, string $sobrenome, int $idade, string $cpf)
    {   
        $this->validarCliente($nome, $sobrenome, $idade, $cpf);
        $this->salvarCliente($nome, $sobrenome, $idade, $cpf);
    }

    private function validarCliente()
    {
        if (strlen($this->nome) < 10) {
        throw new Exception('Quantidade de caracteres mínimas é de dez');
        }

        if ($this->idade < 18) {
        throw new Exception('Precisa ser maior de 18 anos');
        }

        return;
    }

    private function salvarCliente($nome, $sobrenome, $idade, $cpf)
    {
        // Realiza o insert no banco de dados
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->idade = $idade;
        $this->cpf = $cpf;
    }
}