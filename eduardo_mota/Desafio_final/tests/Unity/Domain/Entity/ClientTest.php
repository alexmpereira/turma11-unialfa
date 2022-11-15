<?php
namespace Tests\Unit\Domain\Entity;

use App\Cliente\Domain\Entity\Cliente;
use PHPUnit\Framework\TestCase;
class ClientTest extends TestCase
{
    
    public function testCreateClient(){
        $client = new Cliente('Eduardo','Mota','065.845.998.67','Uno','placa-213');
        $this->assertInstanceOf(Cliente::class, $client);
    }

    public function testNameIsNull(){
        $client = new Cliente('Eduardo','mota','065.845.998.67','Uno','placa-213');
        $this->assertEmpty($client->getName(),"O Nome Não esta nulo");
        
    }

    public function testVehicleEmpty(){
        $client = new Cliente('Eduardo','Mota','456213123','uno','placa-213');
        $this->assertEmpty($client->getVehicle(),"O veiculo nao esta nulo");
        
    }

    
}