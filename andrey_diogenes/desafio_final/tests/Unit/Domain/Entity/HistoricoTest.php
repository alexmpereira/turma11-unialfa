<?php

namespace Tests\Unit\Domain\Entity;

use App\Gerenciamento\Domain\Entity\Historico;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function testSeMetodoHistoricoExiste()
    {
        $this->assertTrue(
            method_exists(new Historico(), "atendimento"),
            "A classe não tem o método historico"
        );
    }

    public function testSeMetodoHistoricoRetonaArray()
    {
        $this->assertIsArray(
            (new Historico())->atendimento(),
            "O método historico não está retornando um array"
        );
    }
    
}