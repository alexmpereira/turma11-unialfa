<?php

namespace Tests\Unit\Domain\Entity;

use App\Atendimento\Domain\Entity\Atendimento;
use App\Cliente\Domain\Entity\Cliente;
use PHPUnit\Framework\TestCase;

class AtendimentoTest extends TestCase
{

    public function testCreateAtendimento()
    {
        $client = new Cliente('Eduardo', 'Mota', '065.845.998.67', 'Uno', 'placa-213');
        $atendimento = new Atendimento(
            $client->getName(),
            $client->getLastName(),
            $client->getCpf(),
            $client->getVehicle(),
            $client->getLicensePlate(),
            'Troca de amortecedores dianteiros',
            '20-07-2023',
            '1.000'
        );
        $this->assertInstanceOf(Atendimento::class, $atendimento);
    }

    public function testVehicleIsNull()
    {
        $client = new Cliente('Eduardo', 'Mota', '065.845.998.67', '', 'placa-213');
        $atendimento = new Atendimento(
            $client->getName(),
            $client->getLastName(),
            $client->getCpf(),
            $client->getVehicle(),
            $client->getLicensePlate(),
            'Troca de amortecedores dianteiros',
            '20-07-2023',
            '1.000'
        );
        $this->assertEmpty($atendimento->getVehicle(),"O veiculo nao esta vazio");
    }
}
