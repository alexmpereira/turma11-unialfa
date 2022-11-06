<?php

namespace Tests\Unit\Domain\Entity;

use App\Atendimento\Domain\Entity\Atendimento;
use PHPUnit\Framework\TestCase;

class AtendimentoTest extends TestCase
{

    public function test_se_metodo_atendimento_existe()
    {
        $this->assertTrue(
            method_exists(new Atendimento(), "atendimento"),
            "A classe não tem o método atendimento"
        );
    }

    public function test_se_metodo_atendimento_retorna_array()
    {
        $this->assertIsArray(
            (new Atendimento())->atendimento(),
            "O método atendimento não está retornando um array"
        );
    }
}