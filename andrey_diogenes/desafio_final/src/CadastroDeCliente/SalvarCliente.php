<?php

declare(strict_types=1);

namespace App\CadastroDeCliente\Domain\SalvarCliente;

use Exception;
use PDO;

class SalvarCliente
{
    protected $nome;
    protected $cpf;
    protected $telefone;
    protected $marca;
    protected $veiculo;
    protected $placa;
    protected $cor;

    public function __construct(string $nome, string $cpf, string $telefone, string $marca, string $veiculo, string $placa, string $cor)
    {   
        $this->validarCliente($nome, $cpf, $telefone, $marca, $veiculo, $placa, $cor);
        $this->salvarCliente($nome, $cpf, $telefone,$marca, $veiculo, $placa, $cor);
    }

    private function validarCliente()
    {
        if (strlen($this->nome) < 10) {
        throw new Exception('Quantidade de caracteres mínimas é de dez');
        }

        return;
    }

    private function salvarCliente($nome, $cpf, $telefone, $marca, $veiculo, $placa, $cor)
    {
        // Realiza o insert no banco de dados
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->marca = $marca;
        $this->veiculo = $veiculo;
        $this->placa = $placa;
        $this->cor = $cor;
    }
}