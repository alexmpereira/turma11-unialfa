<?php
namespace Tests\Unit\Domain\Entity;

use App\Cliente\Domain\Entity\Cliente;
use PHPUnit\Framework\TestCase;
class ClientTest extends TestCase
{
    
    public function testCliente(){
        $client = new Cliente('Gustavo','Cianci','090.243.231.57', 'Civic', '231');
        $this->assertInstanceOf(Cliente::class, $client);
    }

    public function testNomeNull(){
        $client = new Cliente('Gustavo','Cianci','090.243.231.57', 'Civic', '231');
        $this->assertEmpty($client->getNome(),"O Nome Não esta nulo");
        
    }

    public function testVeiculoEmpty(){
        $client = new Cliente('Gustavo','Cianci','090.243.231.57', 'Civic', '231');
        $this->assertEmpty($client->getVehicle(),"Veiculo não ta nulo");
        
    }

    
}