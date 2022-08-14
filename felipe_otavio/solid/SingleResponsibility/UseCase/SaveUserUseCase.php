<?php

class SaveUserUseCase
{
    private $clienteRepository;
    private $mailer;
    private $cliente;

    public function __construct(array $cliente)
    {
        //enviar os dados do cliente para uma entidade de negocio
        $this->cliente = new Cliente($cliente);

        //enviar a entidade para o repositorio
        
        //enviar o email
    }
}