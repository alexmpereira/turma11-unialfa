<?php
namespace Tests\Unit\Domain\Entity;

use App\Cliente\Domain\Entity\Cliente;
use PHPUnit\Framework\TestCase;
class ClientTest extends TestCase

{
    
    public function testCreateClient(){

        $client = new Cliente('Julieser','Patrick','123.456.789.11','Gol','atr-578');
        $this->assertInstanceOf(Cliente::class, $client);

    }

    public function testNameIsNull(){

        $client = new Cliente('Julieser','Patrick','123.456.789.11','Gol','atr-578');
        $this->assertEmpty($client->getName(),"Está ok!");
        
    }

    public function testVehicleEmpty(){

        $client = new Cliente('Julieser','Patrick','123.456.789.11','Gol','atr-578');
        $this->assertEmpty($client->getVehicle(),"Está ok!");
        
    }

    
}