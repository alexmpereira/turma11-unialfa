<?php
use ClienteRepository as GlobalClienteRepository;

class ClienteRepository implements GlobalClienteRepository
{
    public function __construct()
    {
        $this->conn = new PDO('mysql:host=localhost;dbname=teste', 'root', '');
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

    public function create(Cliente $cliente)
    {
        try {
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}