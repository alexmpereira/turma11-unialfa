<?php


class SaveUserUseCase{
    private $clienteRepositorio;
    private $mailler;
    private $cliente;


    public function __construct(array $cliente)
    {
        //enviar os dados do cliente para uma entidade de negocio
        $this->cliente = new Cliente($cliente);

        //enviar a entidade para o repositorio
        $this-> clienteRepository = new ClienteRepository();
        $this-> clienteRepository->create($this->cliente);
        //enviar o email

        $this->mailer = new Mailer();
        $this->mailer->sendEmail(
            'Bem Vindo ao Sistema',
            'Cadastrado com Sucesso!',
            ["leonardo.pardinho@hotmail.com"],
            [""]
        );
    }
}