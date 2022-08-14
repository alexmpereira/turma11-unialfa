<?php

class SaveUserUseCase
{
    private $clienteRepository;
    private $mailer;
    private $cliente;

    public function __construct(array $cliente)
    {
        $this->cliente = new Cliente($cliente);
        
        $this->clienteRepository = new ClienteRepository();
        $this->clienteRepository->create($this->cliente);

        $this->mailer = new Mailer();
        $this->mailer->send('example@mail.com', 'Bem vindo ao sistema', 'Seja bem vindo ao sistema');
    }
}