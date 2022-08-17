<?php

class SaveUserUseCase
{

    private $clienteRepository;
    private $mailler;
    private $cliente;

    public function __construct(array $cliente)
    {
        //Enviar os dados do cliente para uma entidade de negocio
        $this->cliente = new Cliente($cliente);
        //Enviar a entidade para o repositorio
        $this->clienteRepository = new ClienteRepository();
        $this->clienteRepository->create($this->cliente);
        //Enviar o email
        $this->mailler = new Mailer();
        $this->mailler->sendEmail(
            'bem vindo ao sistema',
            'cadastrado com sucesso',
            ['bruno.sil16441@gmail.com'],
            []
        );
    }
}
