<?php

    use App\CadastroDeCliente\Domain\Entity\Cliente;
    use App\Gerenciamento\Domain\Entity\Historico;

    require_once __DIR__ . '/../vendor/autoload.php';

    echo "Hello Word";

    $cliente = new Cliente(
        "Abner",
        "012.345.678-90",
        "44 99999-9999",
        "Toyota",
        "Corola",
        "AAA-1111",
        "Preto"
    );

    $historico = new Historico(
        $cliente->getNome,
        $cliente->getCpf, 
        $cliente->getTelefone,
        $cliente->getMarca, 
        $cliente->getModelo,  
        $cliente->getPlaca, 
        $cliente->getCor,
        'Limpeza',
        '2022-06-22', 
        '15:00', 
        'R$ 80,00', 
        'Limpeza e higienização do veiculo',
        'Agendado', 
    );
    

    var_dump($cliente);
    var_dump($historico);