<?php

declare(strict_types=1);

namespace App\SingleResponsibility;

use PDO;

class connection
{
    protected $conn;

    public function __construct()
    {  
      $this->connection();
    }

    private function connection()
    {
        $this->conn = new PDO("mysql:host=127.0.0.1;post=3306;dbname=mainprojeto", 'root', 'root');
        $this->conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
}
