<?php

Class SaveUserUseCase
{
    private $clienteRepository;
    private $mailer;
    private $cliente;

    public function __construct(array $cliente)
    {
        //Enviar os dados do Cliente para uma entidade de negocio
        $this->cliente = new Cliente($cliente);

        //Enviar a entidade para o repositorio 
        $this->clienteRepository = new ClienteRepository();
        $this->clienteRepository->create($this->cliente);

        //enviar o email
        $this->mailer = new mailer();
        $this->mailer->sendEmail(
            'Bem vindo ao sistema',
            'Cadastrado com sucesso',
            ["teste@gmail.com"],
            [""]
        );
    }
}