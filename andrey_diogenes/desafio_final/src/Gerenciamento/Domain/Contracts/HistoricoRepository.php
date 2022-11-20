<?php

use App\Gerenciamento\Domain\Entity\Historico;

interface HistoricoRepository
{
    public function create(Historico $historico);
}