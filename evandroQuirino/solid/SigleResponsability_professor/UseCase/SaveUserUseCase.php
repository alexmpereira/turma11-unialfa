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
        $this->clienteRepository = new ClienteRepository();
        $this->clienteRepository->create($this->cliente);

        //enviar email 
        $this->mailer = new Mailer();
        $this->mailer->sendEmail(
            "Bem vindo ao sistema",
            "Cadastrado com sucesso",
            ["evandroquirin@gmail.com"],
            [""]
        );

    }
}