<?php

namespace Tests\Unit\Domain\Entity;

use App\Atendimento\Domain\Entity\Atendimento;
use App\Cliente\Domain\Entity\Cliente;
use PHPUnit\Framework\TestCase;

class AtendimentoTest extends TestCase
{

    public function testAtendimento()
    {
        $client = new Cliente('Gustavo', 'Cianci', '090.243.231.57', 'Civic', '231');

        $atendimento = new Atendimento(

            $client->getNome(),
            $client->getUltimoNome(),
            $client->getCpf(),
            $client->getVehicle(),
            $client->getLicensePlate(),
            'Trocar pneus desgastados',
            '02-12-2022',
            '1.300'
        );
        $this->assertInstanceOf(Atendimento::class, $atendimento);
    }

    public function testVeiculoNull()
    {
        $client = new Cliente('Gustavo', 'Cianci', '090.243.231.57', '', '231');

        $atendimento = new Atendimento(
            
            $client->getNome(),
            $client->getUltimoNome(),
            $client->getCpf(),
            $client->getVehicle(),
            $client->getLicensePlate(),
            'Trocar pneus desgastados',
            '02-12-2022',
            '1.300'
        );
        $this->assertEmpty($atendimento->getVehicle(),"Veiculo não esta vazio");
    }
}
