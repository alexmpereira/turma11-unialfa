<?php

declare(strict_types=1);

namespace App\OpenClosedWrong;

enum Reputacao: int {
  case RUIM = 1;
  case REGULAR = 3;
  case BOA = 5;
  case MUITO_BOA = 10;
}

class Cliente {
  private string $nome;
  private string $cpf;
  private Reputacao $reputacao;

  public function getReputacao()
  {
    return $this->reputacao;
  }
}

class Livro {
  private string $titulo;
  private string $autor;
}

class Emprestimo {
  private Cliente $cliente;
  private Livro $livros;
  private $dataEmprestimo;
  private $dataDevolucao;
}

class EmprestimoService {
  public function novoEmprestimo(Cliente $cliente, Livro $livro) 
  {
    $dataEmprestimo = date("Y-m-d");
    $diasParaDevolucao = $cliente->getReputacao();
    $dataDevolucao = strtotime($dataEmprestimo."+ $diasParaDevolucao days");

    return new Emprestimo($cliente, $livro, $dataEmprestimo, $dataDevolucao);
  }
}