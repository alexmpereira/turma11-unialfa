<?php

namespace Tests\Unit\Domain\Entity;

use App\Domain\Entity\Battle;
use PHPUnit\Framework\TestCase;


/**
 * BattleTest
 *
 * @group group
 */
class BattleTest extends TestCase
{

    public function testSeMetodoBattleExiste()
    {
        $this->assertTrue(
            method_exists(new Battle(), 'battle'),"A Classe não tem o metodo Battle"
        );
    }
}

