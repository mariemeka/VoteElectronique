<?php
// src/Service/DatabaseService.php
namespace App\Service;

use Doctrine\DBAL\Driver\Connection;

class DatabaseService
{
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
