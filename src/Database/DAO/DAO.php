<?php

namespace Devboard\Database\DAO;

use PDO;
use PDOException;

class DAO
{
    private string $driver;
    private string $dbname;
    private string $host;
    private string $username;
    private string $password;
    protected PDO $pdo;

    protected function connection(): void
    {
        $this->config();
        $dsn = $this->driver . ':dbname=' . $this->dbname . ';host=' . $this->host;
        try {
            $this->pdo = new PDO($dsn, $this->username, $this->password);
        } catch (PDOException $e) {
            $message = $e->getMessage();
            $code = $e->getCode();
            throw new PDOException($message, $code);
        }
    }

    private function config(): void
    {
        $filename = '../config/config.ini';
        $config = parse_ini_file($filename, true);
        $database = $config['database'];

        if (!isset($database)) {
            echo "Credentials are missing.";
            exit();
        }

        $this->driver = $database['driver'];
        $this->dbname = $database['dbname'];
        $this->host = $database['host'];
        $this->username = $database['username'];
        $this->password = $database['password'];
    }
}
