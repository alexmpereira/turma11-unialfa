<?php

class SaveUserUseCase  
{
    private $clienteRepository;
    private $mailer;
    private $cliente;

    public function __construct(array $cliente) 
    {
        //enviar os dados do cliente para im entidade de negocio
        $this->cliente = new Cliente($cliente);

        //enviar a entidade para o repositorio
        $this->clienteRepository = new ClienteRepository();
        $this->clienteRepository->create($this->cliente);

        //enviar o email
        $this->mailer = new Mailer();
        $this->mailer->sendEmail(
            'seja bem vindo',
            'cadastrado com sucesso',
            ['lucas02.mendes@gmail.com'],
            ['']
        );
    }
}
