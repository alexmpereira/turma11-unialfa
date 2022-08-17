<?php

declare(strict_types=1);

namespace App\OpenClosedWrong;

enum Reputacao {
  case RUIM;
  case REGULAR;
  case BOA;
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
    $diasParaDevolucao = $this->obterDiasParaDevolucao($cliente->getReputacao());
    $dataDevolucao = strtotime($dataEmprestimo."+ $diasParaDevolucao days");

    return new Emprestimo($cliente, $livro, $dataEmprestimo, $dataDevolucao);
  }

  private function obterDiasParaDevolucao(Reputacao $reputacao) 
  {
    if ($reputacao == Reputacao::RUIM) {
      return 1;
    } else if ($reputacao == Reputacao::REGULAR) {
      return 3;
    }

    return 5;
  }
}