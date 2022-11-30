<?php

namespace Tests\Unit\Domain\Entity;

use App\Atendimento\Domain\Entity\Atendimento;
use App\Cliente\Domain\Entity\Cliente;
use PHPUnit\Framework\TestCase;

class AtendimentoTest extends TestCase
{

    public function testCreateAtendimento()
    {
        $client = new Cliente('Julieser','Patrick','123.456.789.11','Gol','atr-578');
        $atendimento = new Atendimento(

            $client->getName(),
            $client->getLastName(),
            $client->getCpf(),
            $client->getVehicle(),
            $client->getLicensePlate(),
            'Substituição de Pneu',
            '11-11-2022',
            '200'
            
        );
        $this->assertInstanceOf(Atendimento::class, $atendimento);
    }

    public function testVehicleIsNull()
    {
        $client = new Cliente('Julieser','Patrick','123.456.789.11','Gol','atr-578');
        $atendimento = new Atendimento(

            $client->getName(),
            $client->getLastName(),
            $client->getCpf(),
            $client->getVehicle(),
            $client->getLicensePlate(),
            'Substituição de Pneu',
            '11-11-2022',
            '200'

        );
        $this->assertEmpty($atendimento->getVehicle(),"Não está Ok!");
    }
}
