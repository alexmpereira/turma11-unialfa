<?php

namespace Tests\Unit\Domain\Entity;

use App\Domain\Entity\Battle;
use PHPUnit\Framework\TestCase;

class BattleTeste extends TestCase
{
    public function testSeMetodoBattleExiste()
    {
        $this->assertTrue(
            method_exists(new Battle(), 'battle'),
            "A classe não tem o método battle"
        );
    }
}